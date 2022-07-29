<div class="w-full md:w-5/6 px-4 mb-4 md:mb-0">
    <div class="flex flex-wrap mb-3">
        <div class="w-2/6">
            <div class="text-sm">Product Name</div>
            <div class="text-xl font-bold">{{ $item->food->name }}</div>
        </div>
        <div class="w-1/6">
            <div class="text-sm">Ukuran</div>
            <div class="text-xl font-bold">{{ ($item->food->ukuran) }}</div>
        </div>

        <div class="w-2/6">
            <div class="text-sm">Harga</div>
            <div class="text-xl font-bold">{{ number_format($item->total) }}</div>
        </div>

        <div class="w-1/6">
            <div class="text-sm">Status</div>
            <div class="text-xl font-bold">{{ $item->status }}</div>
        </div>
    </div>

    <div class="flex flex-wrap mb-3">
        <div class="w-2/6">
            <div class="text-sm">Nama</div>
            <div class="text-xl font-bold">{{ $item->user->name }}</div>
        </div>

        <div class="w-3/6">
            <div class="text-sm">Email</div>
            <div class="text-xl font-bold">{{ $item->user->email }}</div>
        </div>

        <div class="w-1/6">
            <div class="text-sm">City</div>
            <div class="text-xl font-bold">{{ $item->user->city }}</div>
        </div>
    </div>

    <div class="flex flex-wrap mb-3">
        <div class="w-4/6">
            <div class="text-sm">Address</div>
            <div class="text-xl font-bold">{{ $item->user->address }}</div>
        </div>

        <div class="w-1/6">
            <div class="text-sm">Number</div>
            <div class="text-xl font-bold">{{ $item->user->houseNumber }}</div>
        </div>

        <div class="w-1/6">
            <div class="text-sm">Phone</div>
            <div class="text-xl font-bold">{{ $item->user->phoneNumber }}</div>
        </div>
    </div>
    <br>
    <div class="flex flex-wrap mb-3">
        <div class="w-5/6">
            <div class="text-sm">Payment URL</div>
            <div class="text-lg">
                <a href="{{ $item->payment_url }}">{{ $item->payment_url }}</a>
            </div>
        </div>

        <div class="w-1/6">
            <div class="text-sm mb-1">Change Status</div>
            <!-- <a style="background-color: blue;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'ON_DELIVERY']) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                    On Delivery
                                </a>
                                <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'DELIVERED']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                    Delivered
                                </a>
                                <a style="background-color: red;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'CANCELLED']) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                    Cancelled
                                </a> -->

            <a style="background-color: blue;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'belum_dibayar']) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                Belum Dibayar
            </a>
            <br>
            <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'sudah_dibayar']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                Sudah Dibayar
            </a>
            <br>
            <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'sedang_perjalanan']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                Sedang Perjalanan
            </a>
            <br>
            <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'sudah_tiba']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                sudah Tiba
            </a>
            <br>
            <a style="background-color: red;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'CANCELLED']) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                Cancelled
            </a>
        </div>
    </div>
</div>



















<table class="table-auto w-full">
    <thead>
        <tr>
            <th class="border px-6 py-4">Change Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border px-6 py-4 ">
                <a style="background-color: blue;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'belum_dibayar']) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                    Belum Dibayar
                </a>
            </td>
            <td class="border px-6 py-4">
                <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'sudah_dibayar']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                    Sudah Dibayar
                </a>
            </td>
            <td class="border px-6 py-4">
                <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'sedang_perjalanan']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                    Sedang Perjalanan
                </a>
            </td>
            <td class="border px-6 py-4">
                <a style="background-color: green;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'sudah_tiba']) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                    sudah Tiba
                </a>
            </td>
            <td class="border px-6 py-4">
                <a style="background-color: red;" href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'CANCELLED']) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                    Cancelled
                </a>
            </td>
        </tr>
    </tbody>
</table>