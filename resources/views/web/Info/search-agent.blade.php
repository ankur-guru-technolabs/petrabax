@extends('web.master')
@section('content')
<div class="travel-agent-section">
    <div class="container">
        <div class="section-header">
            <h2>Travel agent</h2>
        </div>
        <div class="agent-search-form">
            <form id="agent-search-form" action="{{route('findAgent')}}" method="post">
                @csrf
                <label>Search</label>
                <input type="text" class="form-control" placeholder="Zip code, city, travel agency name" name="search_input" value="{{$search ?? ''}}">
                <div class="form-submit-btn text-center">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>

        <div class="list-travel-agent">
            <h2>List of Travel Agents</h2>
            <div class="custom-table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Agents name</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Contact phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($agents as $agent)
                        <tr>
                            <td>{{$agent->first_name}} {{$agent->last_name}}</td>
                            <td class="text-center">{{$agent->address}}</td>
                            <td class="text-center">
                                <p><a href="tel:{{$agent->phone_number}}">{{$agent->phone_number}}</a></p>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">No agents found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                @if($agents->isNotEmpty())
                    {{ $agents->onEachSide(1)->appends(['search' => $search])->links('pagination')}}
                @endif
            </div>
        </div>

    </div>
</div>
@endsection
@section('jscontent')
<script type = "text/javascript">
    $(document).ready(function() {
        $("#agent-search-form").validate({
            ignore: [],
            rules:{
                search_input: {
                    required: true
                }
            },
            messages:{
                search_input:{
                    required: "Search field is required."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                $('.text-danger').text('');
                error.addClass('invalid-feedback');
                element.closest('.form-control').after(error);
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>
@endsection