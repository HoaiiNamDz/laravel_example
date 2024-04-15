<table class="table">
    <thead>
        <tr >
            <th class="border border-right">
                <input type="checkbox" name="" id="checkAll" class="input-checkbox">
            </th>
            <th class="border border-right">Họ tên</th>
            <th class="border border-right">Email</th>
            <th class="border border-right">Điện thoại</th>
            <th class="border border-right">Địa chỉ</th>
            <th class="text-center border border-right">Tình trạng</th>
            <th class="text-center border border-right">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($users) && is_object($users))
            @foreach($users as $user)
                <tr>
                    <td class="border border-right">
                        <input type="checkbox" name="" id="" class="input-checkbox">
                    </td>
                    <td class="border border-right">{{$user->name}}</td>
                    <td class="border border-right">{{$user->email}}</td>
                    <td class="border border-right">{{$user->phone}}</td>
                    <td class="border border-right">{{$user->address}}</td>
                    <td class="border border-right text-center">
                        <input type="checkbox" class="js-switch" checked>
                    </td>
                    <td class="border border-right text-center">
                        <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
<div class="text-center">
    {{ $users->links('pagination::bootstrap-4') }}
</div>