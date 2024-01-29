@extends('layouts.admin')
@section('content')
    @auth 
        <span> {{$username}} </span>
    @endauth

    @guest 
        <button>Đăng Nhập</button>
    @endguest
    <a href="<?=route('/courses/create')?>"><input type="button" value="Thêm mới"></a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <th>Total register</th>
            <th>Action</th>
        </tr>
        @foreach($courses as $course)
            <tr>
                <td><?=$course['id'] ?></td>
                <td><?=$course['name'] ?></td>
                <td><?=$course['description'] ?></td>
                <td><?=$course['price'] ?></td>
                <td><?=$course['status'] ?></td>
                <td><?=$course['total_register'] ?></td>
                <td>
                    <button><a href="<?=route('admin/courses/'.$course['id'].'/edit')?>">Edit</a></button>    
                    <button><a href="<?=route(`admin/courses/{$course['id']}/delete`) ?>">Delete</a></button>    
                </td>
            </tr>
        @endforeach
    </table>
@endsection
