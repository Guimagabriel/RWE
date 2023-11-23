@extends('Users.home')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <div class="container mt-3 mb-4">
        <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
                        <a href="{{ route('users.create') }}">Cadastrar Usúario</a>
                        <table class="table manage-candidates-top mb-0">
                            <thead>
                            @foreach($users as $user)
                            <tr>
                                <th></th>
                                <th class="text-center">Redes sociais:</th>
                                <th class="action text-right"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="candidates-list">
                                <td class="title">

                                    <div class="thumb">
                                        <img class="img-fluid" src="{{ asset($user->image_path) }}" alt="Imagem do usuário">
                                    </div>
                                    <div class="candidate-list-details">
                                        <div class="candidate-list-info">
                                            <div class="candidate-list-title">
                                                <h5 class="mb-0"><a href="#">{{$user->name}}</a></h5>
                                            </div>
                                            <div class="candidate-list-option">
                                                <ul class="list-unstyled">
                                                    <li>{{ $user->about }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="candidate-list-favourite-time text-center">
                                    <a class="candidate-list-favourite order-2 text-danger" href="{{ route('users.show', ['user' => $user->id]) }}"></a>
                                    @if($user->social_network != null)
                                        @foreach(json_decode($user->social_network, true) as $network => $link)
                                            @if($link !== null)
                                                <a href="{{ $link }}" target="_blank">{{ ucfirst($network) }}</a>
                                            @endif
                                        @endforeach
                                    @endif

                                </td>
                                <td>
                                    <ul class="list-unstyled mb-0 d-flex justify-content-end">
                                        <li><a href="#" class="text-primary" data-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
