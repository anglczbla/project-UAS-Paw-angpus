@extends('layout.main')

@section('title', 'Contact Us')

@section('content')
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <h4 class="section-booking-title pe-3">Contact Us</h4>
        <p class="text-dark mb-4">
            Add a new contact message
        </p>
        {{-- Tombol Tambah --}}
        <a href="{{ route('contact.create') }}" class="btn btn-rounded btn-primary">Add New</a>
        <div class="table-responsive mt-4">
            <table class="table table-bordered text-dark">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $contact)
                    <tr>
                        <td>{{ $contact->nama }}</td>
                        <td>{{ $contact->alamat }}</td>
                        <td>{{ $contact->no_telp }}</td>
                        <td>{{ $contact->pesan }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@if (session('success'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Swal.fire({
        title: "Good job!",
        text: "{{ session('success') }}",
        icon: "success"
    });
</script>
@endif
@endsection
