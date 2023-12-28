<div class="container-fluid">

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
        <div class="col-12 col-md-6 py-4 my-2">
            <form action="">
                <input wire:model.debounce ="search" type= "text" class="form-control col-lg-8" name="userSearch" placeholder="Поиск по имени">
            </form>
        </div>
        <div wire:loading.flex class=" justify-content-center">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    <table class="table" wire:loading.remove>
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Дата регистрации</th>
            <th>
            </th>
        </tr>
        </thead>
        <tbody>
        <div>
            <input wire:model.debounce ="search" type= "text" class="form-control col-lg-8" name="userSearch">
        </div>
        @forelse($users as $user)
            <tr>
                <td data-label="#">{{ $user->id }}</td>
                <td data-label="Имя">{{ $user->name }}</td>
                <td data-label="Email">{{ $user->email }}</td>
                <td data-label="Дата регистрации">{{$user->created_at}}</td>
                <td data-label="" class="text-right">
                    <div class="btn-group">
                        @include('admin.components._actions', ['data' => $user, 'options' => ['show' => false], 'route' => 'admin.users'])
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Пользователей нет</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
