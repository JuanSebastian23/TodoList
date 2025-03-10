<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación Todo List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .task-container {
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .header-bg {
            background-color: #f8f9fa;
            border-bottom: 1px solid #eaeaea;
        }
        .task-item:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="task-container bg-white p-4">
            <div class="header-bg p-3 mb-4 rounded">
                <h1 class="text-center text-primary mb-0"><i class="fas fa-clipboard-list me-2"></i>Todo List</h1>
            </div>
            
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <!-- Formulario para agregar tareas -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i>Agregar Nueva Tarea</h5>
                </div>
                <div class="card-body">
                    <form action="{{url('/')}}" method="post" class="row g-3 align-items-center">
                        @csrf
                        <div class="col-md-9">
                            <label for="task" class="visually-hidden">Tarea</label>
                            <input type="text" name="task" id="task" class="form-control" placeholder="Escribe una nueva tarea..." required>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-plus-circle me-2"></i>Agregar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Lista de tareas -->
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Lista de Tareas</h5>
                </div>
                <div class="card-body p-0">
                    @if(count($tasks) > 0)
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" width="10%">#</th>
                                        <th scope="col" width="70%">Tarea</th>
                                        <th scope="col" width="20%" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tasks as $task)
                                        <tr class="task-item">
                                            <td>{{ $task->id }}</td>
                                            <td>{{ $task->task }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('task.destroy', $task->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta tarea?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        <i class="fas fa-check-circle"></i> Realizada
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="p-4 text-center">
                            <p class="text-muted mb-0"><i class="fas fa-info-circle me-2"></i>No hay tareas pendientes.</p>
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="mt-4 text-center text-muted">
                <small>© 2025 Todo List App</small>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap Bundle con Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>