@extends('back.layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>
                    الاقسام
                    <a href="{{ route('category.create') }}" class="btn btn-primary text-white btn-sm float-start">إضافة
                        قسم جديد</a>
                </h3>
            </div>
            <div class="card-body">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                الاسم
                                            </th>
                                            <th>
                                                عدد العناصر
                                            </th>
                                            <th>
                                                الحالة
                                            </th>
                                            <th>
                                                الكلمات المفتاحية
                                            </th>
                                            <th>
                                                إجراءات
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face1.jpg" alt="image" />
                                            </td>
                                            <td>
                                                Herman Beck
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
