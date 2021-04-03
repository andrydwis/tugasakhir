@extends('layouts.admin.app')
@section('content')
<div class="w-full p-5 mt-20 md:w-auto lg:w-4/6 xl:w-3/4">
    <div>
        <div class="card">
            <div class="flex justify-between card-header">
                <h4 class="h6">Daftar Tag</h4>
                <a href="{{route('admin.tag.create')}}" class="btn-bs-primary">Tambah Tag</a>
            </div>
            <div class="p-8">
                <table id="datatables" class="w-auto text-left">
                    <thead class="pt-10 text-white bg-gray-600 shadow-md">
                        <tr>
                            <th class="px-6 pt-6 pb-4 text-sm font-bold uppercase border border-gray-600">Nama Tag</th>
                            <th class="px-6 pt-6 pb-4 text-sm font-bold uppercase border border-gray-600">Icon</th>
                            <th class="px-6 pt-6 pb-4 text-sm font-bold uppercase border border-gray-600">Menu</th>
                        </tr>
                    </thead>
                    <tbody class="shadow-md">
                        @foreach($tags as $tag)
                        <tr class="hover:bg-gray-100">
                            <td class="px-6 py-4">{{$tag->name}}</td>
                            <td class="px-6 py-4">
                                <img src="{{$tag->icon}}" alt="" class="w-auto h-20">
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('admin.tag.edit', ['tag' => $tag])}}" class="btn-bs-success">Update</a>
                                <form action="{{route('admin.tag.destroy', ['tag' => $tag])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="w-full my-2 btn-bs-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customCSS')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/r-2.2.7/datatables.min.css" />
@endsection

@section('customJS')
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/r-2.2.7/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatables').DataTable({
            responsive: true,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.22/i18n/Indonesian.json"
            }
        });
    });
</script>
@endsection