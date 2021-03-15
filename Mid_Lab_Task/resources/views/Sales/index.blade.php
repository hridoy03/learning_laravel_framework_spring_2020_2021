<h1>Sales Channel</h1>

<a href="{{route('sales.physical')}}">Physical Store</a>

    <table border="1px solid black">
        <tr>
            <td>
                Today Sales Count
            </td>
            <td>
                {{$info['pt']}}
            </td>
        </tr>
        <tr>
            <td>
                Last 7 Day Sales Count
            </td>
            <td>
                {{$info['ps']}}
            </td>
        </tr>
    
    </table>

<a href="{{route('sales.social')}}">Social Media</a> 

    <table border="1px solid black">
        <tr>
            <td>
                Today Sales Count
            </td>
            <td>
                {{$info['st']}}
            </td>
        </tr>
        <tr>
            <td>
                Last 7 Day Sales Count
            </td>
            <td>
                {{$info['ss']}}
            </td>
        </tr>
    
    </table>

<a href="{{route('sales.ecommerce')}}">Ecommerce Store</a>

    <table border="1px solid black">
        <tr>
            <td>
                Today Sales Count
            </td>
            <td>
                {{$info['et']}}
            </td>
        </tr>
        <tr>
            <td>
                Last 7 Day Sales Count
            </td>
            <td>
                {{$info['es']}}
            </td>
        </tr>
    
    </table>

<a href="{{route('root')}}"><button style="margin:10px">Go Back</button></a>

