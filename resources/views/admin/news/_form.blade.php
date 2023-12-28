<x-formGroup name="title" label="Название">
    <input type="text" class="form-control col-lg-8 {{ $errors->has('title') ? 'is-invalid' : '' }}"
           name="title"
           value="{{ old('title') ?? ($news->title ?? '') }}">
</x-formGroup>

<x-formGroup name="published_at" label="Дата публикации">
    <input type="date" class="form-control col-lg-8 {{ $errors->has('published_at') ? 'is-invalid' : '' }}"
           name="published_at"
           value="{{ old('published_at') ?? (optional($news->published_at ?? null)->format('Y-m-d') ?? '') }}">
</x-formGroup>

<x-formGroup name="description" label="Описание">
    <textarea type="text" class="form-control editor col-lg-8 {{ $errors->has('description') ? 'is-invalid' : '' }}"
              name="description">{{ old('description') ?? ($news->description ?? '') }}</textarea>
</x-formGroup>

<x-formGroup name="image" label="Изображение">
    <input type="file" class="form-control col-lg-8 {{ $errors->has('value') ? 'is-invalid' : '' }}"
           name="image"
           value="{{ old('value') ?? ($news->value ?? '') }}">
</x-formGroup>

