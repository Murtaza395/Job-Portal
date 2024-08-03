<h1>{{ $provider->name }}'s Data</h1>
<table>
    <th>Job Title</th>
    <th>Candidate Name</th>
@foreach ($provider->jobs as $job)
    <tr>
        <td>{{ $job->jobTitle }}</td>

        @foreach ($job->applications as $application)
<td>{{ $application->user->name }}</td>
        @endforeach
    </tr>
@endforeach

</table>
