{{-- <div class="container"> --}}
{{-- <div class="row"> --}}
<div class="col-12">
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="alert alert-primary rounded-pill text-center shadow-lg">
                <h5 class="alert-heading text-uppercase font-weight-bold mb-2">
                    {{ $Title }}</h5>
                <p class="mb-0 fst-italic">{{ $Desc }}</p>
            </div>

            @isset($Categories)
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Research Category</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Categories as $category)
                                <tr class="align-middle">
                                    <td>{{ $category->ResearchCategory }}</td>
                                    <td>
                                        <a href="{{ $category->Thumbnail }}"
                                            class="thumbnail-popup">
                                            <img src="{{ $category->Thumbnail }}"
                                                alt="Thumbnail" width="50"
                                                height="50"
                                                class="rounded-circle">
                                        </a>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($category->created_at)->format('l, F jS Y h:i A') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-center text-muted">No categories found.</p>
            @endisset
        </div>
    </div>
</div>

{{-- </div> --}}
{{-- </div> --}}


@include('Categories.NewCategory')
