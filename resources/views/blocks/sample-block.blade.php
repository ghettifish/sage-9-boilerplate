{{--
  Title: Sample Block
  Description: List the trailers for the book
  Category: formatting
  Icon: admin-comments
  Keywords: testimonial quote
  Mode: edit
  Align: left
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: false
--}}

@php
    $title = get_field("title");
    $blocks = [];

    if(have_rows("nested_blocks")) {
      while(have_rows("nested_blocks")) {
        the_row();
        array_push($blocks, [
          'nested_block_title' => get_sub_field('nested_block_title'),
        ]);
      }
    }
    
@endphp



<div class="bg-black px-6 lg:px-20">
  @foreach($blocks as $block)
    @component('components.sample-component', $block)
    @endcomponent
  @endforeach
</div>
