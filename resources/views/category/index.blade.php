@extends('templateAdmin')

@section('style')
    <link rel="stylesheet" href="{{asset('css/category/index.css')}}">
@endsection

@section('contentAdmin')
    <div class="content">

        <h2 id="titre"><strong>Tout les catrgories</strong>r</h2>
        <table  class="table align-middle mb-0 bg-white table-hover">
            <thead class="bg-light">
                <tr>
                    <th>icon</th>
                    <th>nom de category</th>
                    <th>icon class</th>
                    <th>edit category</th>
                    <th>delete category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorys as $category)
                    <tr class="boltd" >
                        <td class="icon"><i class="{{$category->iconCategorie}}"></i></td>
                        <td  >  {{$category->nom}} </td>
                        <td  >{{$category->iconCategorie}} </td>
                        <td class="edit">
                            <a href="{{route('category.edit',['category'=>$category->id])}}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                        <td class="delete">
                            <a href="{{route('category.destroy',['category'=>$category->id])}}">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection