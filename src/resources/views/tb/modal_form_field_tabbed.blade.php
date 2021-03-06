@foreach ($fields as $ident)

    <?php
    $options = $def['fields'][$ident];
    $field = $controller->getField($ident);
    ?>

    @if ($field->isHidden())
        @continue
    @endif

    @if (isset($options['tabs']))
        @if ($is_blank)
            {!! $field->getTabbedEditInput() !!}
        @else
            {!! $field->getTabbedEditInput($row) !!}
        @endif

        @continue
    @endif

    @if ($options['type'] == 'checkbox')
        <section class="{{$field->getAttribute('class_name') ? "section_field ".$field->getAttribute('class_name'): ""}}">
            @if ($is_blank)
                {!! $field->getEditInput() !!}
            @else
                {!! $field->getEditInput($row) !!}
            @endif
         </section>

        @continue
    @endif

    <section class="{{$field->getAttribute('class_name') ? "section_field ".$field->getAttribute('class_name'): ""}}">
        @if ($is_blank)
            @if ($options['type'] != "readonly")
             <label class="label" for="{{$ident}}">{{__cms($options['caption'])}}</label>
                <div style="position: relative;">
                    <label class="{{ $field->getLabelClass() }}">
                    {!! $field->getEditInput() !!}
                    {!! $field->getSubActions() !!}
                    </label>
                </div>
            @endif
        @else
            <label class="label" for="{{$ident}}">{{__cms($options['caption'])}}</label>
            <div style="position: relative;">
              @if($options['type'] == "wysiwyg")
                 <label class="{{ $field->getLabelClass() }}"></label>
                    {!! $field->getEditInput($row) !!}
                    {!! $field->getSubActions() !!}

              @else
                  <label class="{{ $field->getLabelClass() }}">
                      {!! $field->getEditInput($row) !!}
                      {!! $field->getSubActions() !!}
                  </label>
              @endif

            </div>
        @endif
    </section>

@endforeach