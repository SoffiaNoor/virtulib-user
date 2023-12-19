@extends('layouts/buyer')
@section('content')
<div class="grid grid-cols-3 gap-4" style="font-family:Poppins">
    <div class="bg-gradient-to-r from-[#ca8a04] to-[#a16207] rounded-2xl shadow-xl p-4 h-64">
        <div>
            <ul>
                <li class="mb-2 bg-transparent py-2 px-10 rounded-full"><a href="/profile"
                        class="text-white font-bold">My
                        Account</a></li>
                <li class="mb-2 bg-transparent py-2 px-10 rounded-full"><a href="/order" class="text-white font-bold">My
                        Order</a></li>
                <li class="mb-2 bg-[#5e4218] py-2 px-10 rounded-full shadow-xl"><a href="#r"
                        class="text-white font-bold">Top Up</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-gradient-to-r from-[#e5e7eb] to-[#e7e5e4] rounded-2xl shadow-xl col-span-2 p-4">
        <div class="p-5 w-full bg-[#fffbeb] rounded-2xl drop-shadow-md my-2">
            <div class="bg-transparent">
                <div class="text-2xl font-bold my-1">YOUR CURRENT BALANCE</div>
                <hr style="background:linear-gradient(45deg, #ca8a04,#a16207);height:10px;border-radius:40px;width:75%">
                <div class="text-xl my-3">Rp. {{$buyer->balance}}</div>
            </div>
        </div>

        <div class="p-5 w-full bg-[#fffbeb] rounded-2xl drop-shadow-md my-2">
            <div class="bg-transparent">
                <div class="my-3 text-2xl font-bold">TOP UP YOUR BALANCE</div>
                <hr style="background:linear-gradient(45deg, #ca8a04,#a16207);height:10px;border-radius:40px;width:75%">
                <div class="grid grid-cols-3 text-center my-4">
                    <a href="#" onclick="openTopUpModal('BNI')">
                        <div class="p-3 rounded-lg bg-slate-500 text-white mx-3">BNI</div>
                    </a>
                    <a href="#" onclick="openTopUpModal('BRI')">
                        <div class="p-3 rounded-lg bg-slate-500 text-white mx-3">BRI</div>
                    </a>
                    <a href="#" onclick="openTopUpModal('BCA')">
                        <div class="p-3 rounded-lg bg-slate-500 text-white mx-3">BCA</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<dialog id="topUpModal" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Top Up Amount:</h3>
        <form method="POST" class="pt-10" action="{{route('balanceupdate', ['id' => $login])}}" enctype="multipart/form-data">
            @csrf
            <label for="username" class="form-label relative block mb-4 text-black/50 focus-within:text-[#333]">
                <i class="fa fa-user label-icon 
                            transition pointer-events-none
                            [ w-6 h-6 ] 
                            [ absolute top-1/2 left-3 ] 
                            [ transform -translate-y-1/2 ]" style="text-align-last:center!important"></i>
                <input type="number" id="balance" class="form-input 
            block w-full rounded-lg leading-none focus:outline-none placeholder-black/50 
            [ transition-colors duration-200 ] 
            [ py-3 pr-3 md:py-4 md:pr-4 lg:py-4 lg:pr-4 pl-12 ] 
            [ bg-black/20 focus:bg-black/25 ] 
            [ text-[#333] focus:text-black ]" name="balance" required>
            </label>
            <input type="hidden" id="selectedBank" name="selectedBank">
            <div class="modal-action pb-0 mb-0">
                <button type="submit" class="btn">Top Up</button>
                <button type="button" class="btn" onclick="closeTopUpModal()">Close</button>
            </div>
        </form>
    </div>
</dialog>
@endsection

@section('jquery')
<script>
    function openTopUpModal(bank) {
        const topUpModal = document.getElementById('topUpModal');
        const selectedBankInput = document.getElementById('selectedBank');
        
        selectedBankInput.value = bank;
        topUpModal.showModal();
    }

    function closeTopUpModal() {
        const topUpModal = document.getElementById('topUpModal');
        topUpModal.close();
    }

</script>
@endsection