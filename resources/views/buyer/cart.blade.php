@extends('layouts/buyer')
@section('content')
<div class="text-center">
    <div class="font-bold text-3xl my-5">Your Cart</div>
</div>
@foreach ($cart as $item)
<section class="text-center p-10 mt-5 w-full bg-[#fffbeb] rounded-2xl drop-shadow-md">
    <div class="bg-transparent">
        <div class="flex flex-cols-7 gap-3 self-center justify-center items-center">
            <div><input type="checkbox" id="checkbox_{{ $loop->index }}" class="accent-amber-500"></div>
            <div class="mx-auto">
                @if (isset($item->product->image) && !empty($item->product->image))
                <img class="w-40 h-40 object-cover rounded-xl shadow-2xl" src="uploads/produk/{{$item->product->image}}"
                    alt="{{ $item->product->name }}">
                @else
                <div>
                    <img class="w-40 h-40 object-cover rounded-xl shadow-2xl"
                        src="{{ asset('assets/images/no-picture.png') }}" alt="No Picture">
                </div>
                @endif
            </div>
            <div class="mx-auto font-bold">{{ $item->product->name }}</div>
            <div class="mx-auto text-red price"><span>{{ $item->product->price }}</div>
            <div class="flex flex-cols-3">
                <div
                    class="minusBtn justify-center p-2 bg-gradient-to-r from-[#ca8a04] to-[#a16207] h-10 w-10 rounded-full items-center text-center">
                    <i class="mt-1 justify-center text-white fa fa-minus mx-auto"></i>

                </div>
                <div class="mx-3"><span class="counter text-2xl">{{$item->quantity}}</span>
                </div>
                <div
                    class="plusBtn p-2 bg-gradient-to-r from-[#ca8a04] to-[#a16207] h-10 w-10 rounded-full items-center text-center">
                    <i class="mt-1 text-white fa fa-plus mx-auto"></i>
                </div>
            </div>
            <div class="mx-auto text-red total"></div>
            <div class="grid grid-rows-2"><button id="orderNowBtn_{{ $loop->index }}" class="btn btn-warning font-bold rounded-full py-1 px-10 shadow-xl" disabled>Order Now</button>
                <form method="POST" action="{{ route('destroy.cart', $item->_id) }}" enctype="multipart/form-data">
                    @csrf
                    <button class="btn btn-error font-bold rounded-full py-1 px-10 shadow-xl ">Delete
                        Product</button>
                </form>
            </div>
        </div>
    </div>
</section>

<div id="summarySection" class="fixed bottom-0 left-0 right-0 bg-[#fffbeb] p-4 text-center hidden">
    <h2 class="text-lg font-semibold">Checked Products Summary</h2>
    <h2 id="totalCheckedHeading" class="text-lg font-semibold">Total Product: 0</h2>

    <ul id="checkedProductsList" class="list-disc pl-4"></ul>
</div>
@endforeach


@endsection

@section('jquery')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Ambil semua elemen yang dibutuhkan
    const counters = document.querySelectorAll('.counter');
    const plusBtns = document.querySelectorAll('.plusBtn');
    const minusBtns = document.querySelectorAll('.minusBtn');
    const prices = document.querySelectorAll('.price');
    const totals = document.querySelectorAll('.total');

    // Tambahkan event listener untuk setiap item di dalam loop
    counters.forEach((counter, index) => {
        let counterValue = parseInt(counter.textContent);
        const priceValue = parseFloat(prices[index].textContent);

        function displayCounter() {
            counters[index].textContent = counterValue;
            calculateTotal(index);
        }

        function calculateTotal(index) {
            const total = counterValue * priceValue;
            totals[index].textContent = total.toFixed(2);
        }

        function increaseCounter() {
            counterValue++;
            displayCounter();
        }

        function decreaseCounter() {
            if (counterValue > 1) {
                counterValue--;
                displayCounter();
            }
        }

        plusBtns[index].addEventListener('click', increaseCounter);
        minusBtns[index].addEventListener('click', decreaseCounter);

        displayCounter();
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('[type="checkbox"]');
    const orderNowButtons = document.querySelectorAll('[id^="orderNowBtn_"]');

    checkboxes.forEach((checkbox, index) => {
        checkbox.addEventListener('change', function () {
            const orderNowButton = orderNowButtons[index];
            orderNowButton.disabled = !checkbox.checked;
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('[type="checkbox"]');
    const orderNowButtons = document.querySelectorAll('[id^="orderNowBtn_"]');
    const summarySection = document.getElementById('summarySection');
    const checkedProductsList = document.getElementById('checkedProductsList');
    const totalCheckedHeading = document.getElementById('totalCheckedHeading');

    checkboxes.forEach((checkbox, index) => {
        checkbox.addEventListener('change', function () {
            const orderNowButton = orderNowButtons[index];
            orderNowButton.disabled = !checkbox.checked;

            updateSummarySection();
        });
    });

    function updateSummarySection() {
        const checkedCheckboxes = document.querySelectorAll('[type="checkbox"]:checked');
        const totalChecked = checkedCheckboxes.length;

        if (totalChecked > 1) {
            summarySection.classList.remove('hidden');
            checkedProductsList.innerHTML = '';

            checkedCheckboxes.forEach((checkbox) => {
                const itemIndex = checkbox.id.split('_')[1];
                const productName = document.querySelector(`#orderNowBtn_${itemIndex}`).previousElementSibling.textContent;

                const listItem = document.createElement('li');
                listItem.textContent = productName;
                checkedProductsList.appendChild(listItem);
            });
        } else {
            summarySection.classList.add('hidden');
        }

        // Update the Total Product heading
        totalCheckedHeading.textContent = `Total Product: ${totalChecked}`;
    }
});
</script>
@endsection