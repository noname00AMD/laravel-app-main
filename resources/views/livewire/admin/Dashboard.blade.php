{{-- @extends('layouts.AdminLayout')
{{-- <x-layouts.admin :$title> 
    @section('title', $title)
 
@section('content') --}}
<div class="col-span-9 col-start-4 ">
    <h1 class="text-4xl">dashboard</h1>
<div>

    <pre>
        <strong>Uptime:</strong>
        <?php system("cat /proc/uptime"); ?>
        <br />
        <strong>System Information:</strong>
        <?php system("uname -a"); ?>
        <br />
        <strong>Memory Usage (MB):</strong>
        <?php system("cat /proc/meminfo "); ?>
        <br />
        <?php echo "memory_get_usage: ". memory_get_usage()." kB / memory_get_peak_usage: ".  memory_get_peak_usage(true)." kB"; ?>
        <br />
        <strong>Disk Usage:</strong>
        <?php system("df -h"); ?>
        <br />
        <strong>CPU Information:</strong>
        <?php system("cat /proc/cpuinfo | grep \"model name\\|processor\""); ?>
        <br />
        <?php echo "PHP : ". phpversion(); ?>
        <br />
        <?php echo "Operating System : ". PHP_OS; ?>
        <br />
        <?php echo "Operating System : ". php_uname(); ?>
        <br />
        <?php echo "Zend Engine version : ". zend_version(); ?>
    </pre>
</div>
</div>
{{-- @endsection --}}
{{-- </x-layouts.admin> --}}

