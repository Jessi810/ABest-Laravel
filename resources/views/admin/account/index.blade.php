@extends(
    'layouts.universal',
    [
        'title' => 'Users',
        'heading_title' => 'Users'
    ]
)

@section('head')
@endsection

@section('script')
@endsection

@section('content')
    <div id="content">
        <div class="container">

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @foreach($user->roles()->get() as $role)
                                    <span class="label label-default">{{ $role->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('admin.user.destroy', ['user' => $user]) }}" class="btn btn-sm btn-default">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
        <!-- /.container -->
    </div>
@endsection
