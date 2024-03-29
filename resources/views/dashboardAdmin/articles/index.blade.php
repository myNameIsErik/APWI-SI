@extends('dashboardAdmin.layouts.master-dashboard')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Articles</h1>
    </div>
    <div class="table-responsive col-lg-8 mb-4">
        <a href="/dashboard/articles/create" class="btn btn-primary mb-3">Create New Article</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col" class="text-center">#</th>
              <th scope="col" class="text-center">Title</th>
              <th scope="col" class="text-center">By</th>
              <th scope="col" class="text-center">Category</th>
              <th scope="col" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($articles as $article)
                <tr>
                    <td class="px-2">{{ $loop->iteration }}.</td>
                    <td class="px-2">{{ $article->title }}</td>
                    <td class="px-2">{{ $article->user->name }}</td>
                    <td class="px-2">{{ $article->articlecategory->name }}</td>
                    <td>
                        <a href="/dashboard/articles/{{ $article->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>    
                        <a href="/dashboard/articles/{{ $article->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="/dashboard/articles/{{ $article->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span data-feather="x-circle"></span></button>
                        </form>  
                    </td>  
                </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    <div class="d-flex">
      {{ $articles->links() }}
    </div>
@endsection