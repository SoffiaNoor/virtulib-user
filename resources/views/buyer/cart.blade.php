@extends('layouts/buyer')
@section('content')
<div class="text-center">
    <div class="font-bold text-3xl my-5">Your Cart</div>
</div>
@if (session('success'))
<div class="alert alert-success mb-3" style="color:white;font-weight:bold" role="alert">
    {{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-warning mb-3" style="color:white;font-weight:bold" role="alert">
    {{ session('error') }}
</div>
@endif
@if ($cart !== null && count($cart) > 0)
@foreach ($cart as $item)
<section class="text-center p-10 mt-5 w-full bg-[#fffbeb] rounded-2xl drop-shadow-md">
    <div class="bg-transparent">
        <form class="flex flex-cols-7 gap-3 self-center justify-center items-center" method="POST" id="form1"
            action="{{ route('tolongdong', $item->_id) }}" enctype="multipart/form-data">
            @csrf
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
            <div class="relative flex items-center max-w-[8rem] mx-10">
                <button type="button" id="decrement-button" data-input-counter-decrement="total_quantity"
                    class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h16" />
                    </svg>
                </button>
                <input type="number" id="total_quantity" name="total_quantity" value="{{$item->quantity}}" data-input-counter
                    aria-describedby="helper-text-explanation"
                    class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="999" required>
                <button type="button" id="increment-button" data-input-counter-increment="total_quantity"
                    class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </button>
            </div>
            <div class="grid grid-rows-2">
                <button id="orderNowBtn_{{ $loop->index }}" type="submit"
                    class="btn btn-warning font-bold rounded-full py-1 px-10 shadow-xl" disabled>Order Now</button>
        </form>
        <form method="POST" id="form2" action="{{ route('destroy.cart', $item->_id) }}" enctype="multipart/form-data">
            @csrf
            <button class="btn btn-error font-bold rounded-full py-1 px-10 shadow-xl ">Delete
                Product</button>
        </form>
    </div>
</section>
<div id="summarySection"
    class="fixed bottom-0 left-0 right-0 bg-gradient-to-r from-[#ca8a04] to-[#a16207] p-4 text-center hidden z-50">
    <h2 class="text-lg font-semibold text-white">Checked Products Summary</h2>
    <ul id="checkedProductsList" class="list-disc pl-4"></ul>
</div>
@endforeach
@else
<section class="text-center p-10 mt-5 w-full bg-gradient-to-r from-[#ca8a04] to-[#a16207] rounded-2xl drop-shadow-md">
    <div class="bg-transparent">
        <div class="text-center">
            <div class="font-bold text-white text-3xl my-5">There's No Product You've Added on Cart</div>
        </div>
    </div>
</section>
@endif


@endsection

@section('jquery')
<script>
    document.addEventListener("DOMContentLoaded", function () {
            const decrementButton = document.getElementById("decrement-button");
            const incrementButton = document.getElementById("increment-button");
            const quantityInput = document.getElementById("total_quantity");

            decrementButton.addEventListener("click", function () {
                updateCounter(-1);
            });

            incrementButton.addEventListener("click", function () {
                updateCounter(1);
            });

            function updateCounter(amount) {
                let currentValue = parseInt(quantityInput.value) || 0;
                currentValue += amount;

                // Ensure the value doesn't go below 0
                currentValue = Math.max(currentValue, 0);

                quantityInput.value = currentValue;
            }
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

    checkboxes.forEach((checkbox, index) => {
        checkbox.addEventListener('change', function () {
            const orderNowButton = orderNowButtons[index];
            orderNowButton.disabled = !checkbox.checked;

            updateSummarySection();
        });
    });

    function updateSummarySection() {
        const checkedCheckboxes = document.querySelectorAll('[type="checkbox"]:checked');

        if (checkedCheckboxes.length > 1) {
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
    }
});

</script>
@endsection