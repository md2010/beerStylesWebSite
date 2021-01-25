<link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}" >
<table>
    <thead>
        <tr>
            <th></th>
            <th>Category</th>
            <th>StyleFamily</th>
            <th>Style</th>
            <th>ABV</th>
            <th>SRM</th>
            <th>IBU</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $value)
        <tr>
            <td><img src="{{ asset('images/').'/'.$value->imgsrc }}" width = "150" height = "210" alt="tag"></td>
            <td>{{$value->category}}</td>
            <td>{{$value->styleFamily}}</td>
            <td>{{$value->style}}</td>
            <td>{{$value->abvFrom}}% -  {{$value->abvTo}}%</td>   
            @if ($value->srmTo == 52) 
                <td>{{$value->srmFrom}}+</td>
            @else
            <td>{{$value->srmFrom}} -  {{$value->srmTo}}</td>
            @endif
            <td>{{$value->ibuFrom}} -  {{$value->ibuTo}}</td>             
        </tr>
        @endforeach
    </tbody>
        </table>        
