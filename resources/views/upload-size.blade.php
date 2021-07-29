@if(Auth::user()->user_subscr_space_level == 'limited')
@php
if(Auth::user()->user_subscr_space_type == 'MB')
{ 
$maxsize = Auth::user()->user_subscr_space; 
} 
elseif(Auth::user()->user_subscr_space_type == 'GB')
{
$maxsize = Auth::user()->user_subscr_space * 1024;
}
else
{
$maxsize = Auth::user()->user_subscr_space * 1048576;
}
@endphp
<script type="text/javascript">
$('#item_file').filer({
		showThumbs: true,
		addMore: false,
		allowDuplicates: false,
		limit: 1,
        maxSize: null,
		fileMaxSize : {{ $maxsize }}, 
		extensions: ["zip"],
		captions: {
			button: "Choose Files",
			feedback: "Choose files To Upload",
			feedback2: "files were chosen",
			errors: {
				filesType: "Only Zip file is allowed to be uploaded."
			}
		}
        

	});
	$('#video_file').filer({
		showThumbs: true,
		addMore: false,
		allowDuplicates: false,
		limit: 1,
		fileMaxSize : {{ $maxsize }},
        extensions: ["mp4"],
		captions: {
			button: "Choose Files",
			feedback: "Choose files To Upload",
			feedback2: "files were chosen",
			errors: {
				filesType: "Only MP4 file is allowed to be uploaded."
			}
		}
        

	});
</script>
@else
<script type="text/javascript">
$('#item_file').filer({
		showThumbs: true,
		addMore: false,
		allowDuplicates: false,
		limit: 1,
        maxSize: null,
		extensions: ["zip"],
		captions: {
			button: "Choose Files",
			feedback: "Choose files To Upload",
			feedback2: "files were chosen",
			errors: {
				filesType: "Only Zip file is allowed to be uploaded."
			}
		}
        

	});
	$('#video_file').filer({
		showThumbs: true,
		addMore: false,
		allowDuplicates: false,
		limit: 1,
        extensions: ["mp4"],
		captions: {
			button: "Choose Files",
			feedback: "Choose files To Upload",
			feedback2: "files were chosen",
			errors: {
				filesType: "Only MP4 file is allowed to be uploaded."
			}
		}
        

	});
</script>
@endif