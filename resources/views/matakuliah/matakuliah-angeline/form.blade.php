<div class="form-group {{ $errors->has('kodeMatakuliah') ? 'has-error' : ''}}">
    <label for="kodeMatakuliah" class="control-label">{{ 'Kodematakuliah' }}</label>
    <input class="form-control" name="kodeMatakuliah" type="text" id="kodeMatakuliah" value="{{ isset($matakuliahangeline->kodeMatakuliah) ? $matakuliahangeline->kodeMatakuliah : ''}}" >
    {!! $errors->first('kodeMatakuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matakuliah') ? 'has-error' : ''}}">
    <label for="matakuliah" class="control-label">{{ 'Matakuliah' }}</label>
    <textarea class="form-control" rows="5" name="matakuliah" type="textarea" id="matakuliah" >{{ isset($matakuliahangeline->matakuliah) ? $matakuliahangeline->matakuliah : ''}}</textarea>
    {!! $errors->first('matakuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sks') ? 'has-error' : ''}}">
    <label for="sks" class="control-label">{{ 'Sks' }}</label>
    <textarea class="form-control" rows="5" name="sks" type="textarea" id="sks" >{{ isset($matakuliahangeline->sks) ? $matakuliahangeline->sks : ''}}</textarea>
    {!! $errors->first('sks', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
