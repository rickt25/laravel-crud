<form action="{{ route($route . '.destroy', $id) }}" method="POST">
@csrf
@method('DELETE')
    <a href="{{ route($route . '.edit', $id) }}">
        <x-button type="button" color="green">Edit</x-button>
    </a>
    <x-button type="submit" color="red">Delete</x-button>
</form>