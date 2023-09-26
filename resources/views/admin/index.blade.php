@extends('layouts.guest')

@section('main-content')
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Chief</th>
                    <th scope="col">Members</th>
                    <th scope="col">Types</th>

                    <th scope="col">Azioni</th>

                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($projects as $project)
                    <tr>
                          {{-- <th scope="row">1</th> --}}
                          <td>{{$project->title}}</td>
                          <td>{{$project->description}}</td>
                          <td>{{$project->start_date}}</td>
                          <td>{{$project->end_date}}</td>
                          <td>{{$project->chief}}</td>
                          <td>{{$project->members}}</td>
                          <td>{{$project->type->name}}</td>

                          <td>
                            <a href="{{route('admin.projects.create')}}" class="btn btn-primary">
                              Aggiungi
                            </a>
                            <a href="{{route('admin.projects.edit' , ['project'=>$project->id])}}" class="btn btn-success">
                              Modifica
                            </a>
                          </td>

                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>



                 



           
    </div>
@endsection