@extends('layouts/buyer')
@section('content')
    <div class="grid grid-cols-3 gap-4 h-screen">
        <div class="bg-gray-300 p-4 ">
            <div>
                <h2 class="text-lg font-semibold mb-4">Sidebar
                </h2>
                <ul>
                    <li class="mb-2 bg-black"><a href="#" class="text-blue-500 hover:underline">My Account</a></li>
                    <li class="mb-2"><a href="#" class="text-blue-500 hover:underline">My Order</a></li>
                </ul>
            </div>
        </div>
        <div class="col-span-2 p-4 bg-gray-200">
            <div class="px-3 pt-2 font-weight-bold">
                <h5 class="font-weight-bolder">My profile:</h5>
                <hr style="background-color:#01353f;height:10px;border-radius:40px;width:25%">
            </div>
            <div class="container-fluid py-2">
                <div class="row">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td><label>Username</label></td>
                                        <td><input type="text" class="form-control bg-white rounded-full mx-2 my-2"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td><label>Full Name</label></td>
                                        <td><input type="text" class="form-control bg-white rounded-full mx-2 my-2"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td><label>Address</label></td>
                                        <td><input type="text" class="form-control bg-white rounded-full mx-2 my-2"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td><label>Email</label></td>
                                        <td><input type="text" class="form-control bg-white rounded-full mx-2 my-2"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td><label>Telepon Number</label></td>
                                        <td><input type="text" class="form-control bg-white rounded-full mx-2 my-2"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td><label>Gender</label></td>
                                        <td class="flex items-center">
                                            {{-- <div class="flex items-center"> --}}
                                            <input type="radio" name="role" value="buyer" class="mr-2 w-5 h-5">
                                            <label class="text-black mr-10">Laki-laki</label>

                                            <input type="radio" name="role" value="seller" class="mr-2 w-5 h-5">
                                            <label class="text-black">Perempuan</label>
                                            {{-- </div> --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Date Birth</label></td>
                                        <td>
                                            <!-- Dropdown for Tanggal -->
                                            <select name="tanggal" class="form-select bg-white rounded-full mx-2 my-2">
                                                <option value="" disabled selected>Date</option>
                                                <!-- Generate options for Tanggal -->
                                                <!-- Change 31 to the maximum days in a month if necessary -->
                                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                    
                                            <!-- Dropdown for Bulan -->
                                            <select name="bulan" class="form-select bg-white rounded-full mx-2 my-2">
                                                <option value="" disabled selected>Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="2">March</option>
                                                <option value="2">April</option>
                                                <option value="2">Mei</option>
                                                <option value="2">June</option>
                                                <option value="2">July</option>
                                                <option value="2">August</option>
                                                <option value="2">September</option>
                                                <option value="2">October</option>
                                                <option value="2">November</option>
                                                <option value="2">December</option>
                                            </select>
                                    
                                            <!-- Dropdown for Tahun -->
                                            <select name="tahun" class="form-select bg-white rounded-full mx-2 my-2">
                                                <option value="" disabled selected>Year</option>
                                                <!-- Generate options for Tahun, starting from a specific year -->
                                                <!-- Change 1900 and 2000 to the desired range -->
                                                <?php for ($i = 2000; $i >= 1900; $i--) { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Bank</label></td>
                                        <td><input type="text" class="form-control bg-white rounded-full mx-2 my-2"
                                                disabled></td>
                                    </tr>

                                    
                                </table>
                                <div class="form-group">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
@endsection

@section('jquery')
    <script></script>
@endsection
