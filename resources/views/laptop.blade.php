@extends('layouts.table')

@section('konten')
<div>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="row">ID</th>
                                <th scope="col">ProdukID</th>
                                <th scope="col">Nomor Seri</th>
                                <th scope="col">Processor</th>
                                <th scope="col">OS</th>
                                <th scope="col">VGA</th>
                                <th scope="col">Memory</th>
                                <th scope="col">Storage</th>
                                <th scope="col">Baterai</th>
                                <th scope="col">Optical Drive</th>
                                <th scope="col">Audio</th>
                                <th scope="col">Kamera</th>
                                <th scope="col">Network</th>
                                <th scope="col">Slot</th>
                                <th scope="col">Dimensi</th>
                                <th scope="col">Display</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Aksi         </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($laptop as $lptp)
                            <tr>
                                <th scope="row">{{$lptp->id}}</th>
                                <td>{{$lptp->produkId}}</td>
                                <td>{{$lptp->nomorSeri}}</td>
                                <td>{{$lptp->processorId}}</td>
                                <td>{{$lptp->osId}}</td>
                                <td>{{$lptp->vgaId}}</td>
                                <td>{{$lptp->memoryId}}</td>
                                <td>{{$lptp->storageId}}</td>
                                <td>{{$lptp->batteryId}}</td>
                                <td>{{$lptp->punyaOpticalDrive}}</td>
                                <td>{{$lptp->audio}}</td>
                                <td>{{$lptp->camera}}</td>
                                <td>{{$lptp->network}}</td>
                                <td>{{$lptp->slots}}</td>
                                <td>{{$lptp->dimensi}}</td>
                                <td>{{$lptp->display}}</td>
                                <td>{{$lptp->berat}}</td>
                                <td>
                                    <a href="" class="badge bg-success">edit</a>
                                    <a href="" class="badge bg-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>   
@endsection