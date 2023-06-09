<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">

                </ol>
            </div>
            <h4 class="page-title">Products</h4>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-centered mb-0 table-responsive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->title}}</td>
                            <?php
                            foreach ($product->images->where('position_key', 1) as $image)
                            {
                                $featureImage = $image->image;
                            }
                            ?>
                            @if(isset($featureImage))
                            <td><img src="{{asset('uploads/images/products/'.$featureImage)}}" width="100" height="100"></td>
                            @else
                                <td><img src="" alt="No Image found" width="100" height="100"></td>
                            @endif
                                <td>{{$product->current_stock}}</td>
                            <td>
                                <div class="badge badge-info-lighten">{{$product->status}}</div>
                            </td>
                            <td>
                                <a href="{{route('InVendor.Product.EditPage',$product->id)}}"  class="edit btn btn-info btn-sm"> <i class="mdi mdi-pencil"></i> </a>
                                <a href="{{route('InVendor.Product.DeleteProcess',$product->id)}}"  class="delete btn btn-danger btn-sm">  <i class="mdi mdi-trash-can"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-5">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>

    </div>
</div>
