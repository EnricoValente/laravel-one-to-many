@extends('layouts.guest')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>
                              Aggiungi un nuovo Progetto
                        </h1>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col bg-light py-4">
                        <form action="{{ route('admin.projects.store') }}" method="POST">
                            @csrf
                            
            
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" maxlength="100" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter value..." required>
            
                                @error('title')
                                <div class="alert alert-danger my-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
            
                            <div class="mb-3">
                                <label for="chief" class="form-label">Chief</label>
                                <input type="text"  class="form-control @error('chief') is-invalid @enderror" id="chief" name="chief" placeholder="Enter value..." required>
            
                                @error('chief')
                                <div class="alert alert-danger my-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
            
                            <div class="mb-3">
                                <label for="start_date" class="form-label">Start date</label>
                                <input type="date"  class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" placeholder="Enter value..." required>
                                @error('start_date')
                                <div class="alert alert-danger my-2">
                                    {{$message}}
                                </div>
                                @enderror
            
                            </div>
            
                            <div class="mb-3">
                                <label for="end_date" class="form-label">End date</label>
                                <input type="date"  class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" required placeholder="Enter value...">
            
                                @error('end_date')
                                <div class="alert alert-danger my-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
            
                            <div class="mb-3">
                                <label for="members" class="form-label">Members</label>
                                <input type="number"  class="form-control @error('members') is-invalid @enderror" id="members" name="members" placeholder="Enter value..." required>
            
                                @error('members')
                                <div class="alert alert-danger my-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
            
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required rows="3"></textarea>
            
                                @error('description')
                                <div class="alert alert-danger my-2">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
            
                            <div>
                                <button type="submit" class="btn btn-success w-100">
                                   Aggiungi
                                </button>
                            </div>
                        </form>
                          
            
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



                 



           