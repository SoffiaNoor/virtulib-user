@extends('layouts/buyer')
@section('content')
<div class="text-center">
    <div class="font-bold text-3xl my-5">Checkout</div>
</div>
<section class="text-center p-10 mt-5 w-full bg-[#fffbeb] rounded-2xl drop-shadow-md">
    <div class="bg-transparent">
        <div class="leading-loose">
            <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                <p class="text-gray-800 font-medium">Customer information</p>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Name</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name"
                        type="text" required="" placeholder="Your Name" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Email</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                        type="text" required="" placeholder="Your Email" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="cus_email">Address</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                        type="text" required="" placeholder="Street" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="hidden text-sm block text-gray-600" for="cus_email">City</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                        type="text" required="" placeholder="City" aria-label="Email">
                </div>
                <div class="inline-block mt-2 w-1/2 pr-1">
                    <label class="hidden block text-sm text-gray-600" for="cus_email">Country</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                        type="text" required="" placeholder="Country" aria-label="Email">
                </div>
                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                    <label class="hidden block text-sm text-gray-600" for="cus_email">Zip</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                        type="text" required="" placeholder="Zip" aria-label="Email">
                </div>
                <p class="mt-4 text-gray-800 font-medium">Payment information</p>
                <div class="">
                    <label class="block text-sm text-gray-600" for="cus_name">Card</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name"
                        type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
                </div>
                <div class="mt-4">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                        type="submit">$3.00</button>
                </div>
            </form>
        </div>
    </div>
</section>



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