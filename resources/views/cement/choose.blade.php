@extends('layouts.core')
@section('content')
    <div class="content">
        @if(count($cement)==0)
            <div class="container">
                <p>no data yet</p>
            </div>
        @else
        <div class="option-section">
            <div class="container">
                <form action="{{ route('cement.choosedate') }}" method="post">
                {{ csrf_field() }}	
                    <div class="row">
                        <div class="col-md-4">
                            <select class="form-control" name="month">
                                <option value="" disabled selected>-- Choose Month --</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="year">
                                <option value="" disabled selected>-- Choose Year --</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-info btn-fill">Go</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="content">
                            <div id="piechart" class="ct-chart ct-perfect-fourth" style="width:100%; margin: 0 auto; height: 400px;"></div>
                            <?php 
                                    $totalbags = 0;
                                    $totalgood = 0;
                                    foreach($cement as $cements)
                                    {
                                    $totalbags += $cements->total_no_bags;
                                    $totalgood += $cements->total_good;
                                    //    $date = $cements->created_at;
                                    }
                                    // $year = date('Y', strtotime($date));
                                    $defects = $totalbags - $totalgood;
                                    $def_divide = $defects / $totalbags;
                                    $def_percent = $def_divide * 100;
                                    $defect =  number_format($def_percent, 2, '.', '');
                                    
                                    $good_divide = $totalgood / $totalbags;
                                    $good_percent = $good_divide * 100;
                                    $good =  number_format($good_percent, 2, '.', '');
                                
                             ?>   
                                <script type="text/javascript">
                                    var defect_percentage_pie = "<?php echo $defect?>"
                                    var good_percentage_pie = "<?php echo $good?>"
                                </script>
                            <script src="{{asset('js/piechart.js')}}"></script>
                            <div class="footer">
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="content">
                            <?php 
                                $total = array();
                                foreach($bar as $bars){
                                    $total[] = $bars;
                                    
                                }
                            ?>
                            <script>
                                // var bar = [];
                                var bar = <?php echo json_encode($total); ?>;
                                var type = <?php echo json_encode($types); ?>;
                                console.log(type);
                            </script>
                            <div id="barchart" class="ct-chart" style="width:100%; margin: 0 auto; height: 400px;"></div>
                            <script src="{{asset('js/barchart.js')}}"></script>
                            <div class="footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Cements</h4>
                            <!-- <p class="category">Backend development</p> -->
                        </div>
                        <div class="content">
                            <div class="table-full-width">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Cause of defects</th>
                                            <th>Total no of cement bags loaded to vessel</th>
                                            <th>Total number of good cement bags</th>
                                            <th>Types of Cement bag</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $cement as $cements )
                                        <tr>
                                            <td>{{ $cements->created_at->format('Y-m-d') }}</td>
                                            <td>{{ $cements->cause }}</td>
                                            <td>{{ $cements->total_no_bags }}</td>
                                            <td>{{ $cements->total_good }}</td>
                                            <td>{{ $cements->types }}</td>
                                            <td class="td-actions text-right">
                                                <a href="{{ route('cement.edit', $cements->id) }}" rel="tooltip" title="Edit Data" class="btn btn-info btn-simple btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a class="btn btn-danger btn-simple btn-xs remove-record" rel="tooltip" title="Remove" data-toggle="modal" data-target="#custom-width-modal" data-url="{{ route('cement.destroy', $cements->id) }}" data-id="{{$cements->id}}"><i class="fa fa-times"></i></a>
                                                <!-- <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="fa fa-times"></i>
                                                </button> -->
                                            </td>
                                        </tr>
                                        @endforeach  
                                    </tbody>
                                </table>
                            </div>

                            <div class="footer" id="content">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    @include('filemodal')
@endsection