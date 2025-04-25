@extends('layouts.app', ['title' => 'Programs'])
@section('content')
    <div class="container-fluid">
        <!-- Modal button for create program -->
        <button class="btn btn-success" data-bs-target="#createProgramModal" data-bs-toggle="modal">Create Program</button>

        @foreach ($programs as $program)
            <div class="card mb-3 mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <b>Title:</b><br>
                            {{ $program->title }}
                        </div>
                        <div class="col-md-4 mb-3">
                            <b>Enrollments:</b><br>
                            {{ $program->enrolls->count() }}
                        </div>
                        <div class="col-md-4 mb-3">
                            <b>Created On:</b><br>
                            {{ $program->created_at->format('F jS, Y') }}
                        </div>
                    </div>
                    <p class="card-text">{{ $program->description }}</p>
                    <div class="modal-footer">
                        <div class="mb-2 ms-2">
                            <a href="" class="btn btn-success" data-bs-target="#Enroll{{ $program->id }}"
                                data-bs-toggle="modal">Enroll Client</a>
                            <!-- modal -->
                            <div class="modal fade" id="Enroll{{ $program->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Enroll Client</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('enrollments.store', ['program_id' => $program->id]) }}"
                                            method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="client_id" class="form-label">Select Client</label>
                                                    <select name="client_id" id="client_id" class="form-select" required>
                                                        <option value="">Select Client</option>
                                                        @foreach (App\Models\User::where('role', 'Client')->get() as $client)
                                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Enroll</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 ms-2">
                            <a href="{{ route('programs.show', $program->id) }}" class="btn btn-primary"><i
                                    class="icon-eye"></i></a>
                        </div>
                        <div class="mb-2 ms-2">
                            <a href="{{ route('programs.edit', $program->id) }}" class="btn btn-warning"><i
                                    class="icon-pencil"></i></a>
                        </div>
                        <form action="{{ route('programs.destroy', $program->id) }}" method="POST" class="mb-2 ms-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="icon-trash"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection