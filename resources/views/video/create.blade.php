@extends('layout')

@section('content')
                      <!-- upload -->
                      <div class="col-md-8">
						<h1 class="page-title"><span>آپلود</span> فیلم</h1>
						<form action="{{route('videos.store')}}" method="POST">
                            @csrf
                        	<div class="row">
                            	<div class="col-md-6">
                                	<label> نام یکتا</label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="برچسب ها">
                                    @error('name')
                                    <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{$message}}
                                        </strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-md-6">
                                	<label> دسته بندی </label>
                                    
                                        <select name="category_id" class="form-control">
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    @error('name')
                                    <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{$message}}
                                        </strong>
                                    </span>
                                @enderror
                                </div>
                            	<div class="col-md-6">
                                	<label>مدت زمان </label>
                                    <input type="text" name="time" value="{{old('time')}}" class="form-control" placeholder="مدت زمان ">
                                    @error('category_id')
                                    <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{$message}}
                                        </strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-md-6">
                                	<label>اسلاگ  </label>
                                    <input type="text" name="slug" value="{{old('slag')}}" class="form-control" placeholder="اسلاگ  ">
                                    @error('slug')
                                    <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{$message}}
                                        </strong>
                                    </span>
                                @enderror
                                </div>
                            	
                            	{{-- <div class="col-md-6">
                                	<label>آدرس ویدیو </label>
                                    <input type="text" name="" class="form-control" placeholder=" آدرس ویدیو">

                                </div> --}}
                                <div class="col-md-6">
                                	<label> تصویر بندانگشتی</label>
                                    <input type="text" name="tumbnail" value="{{old('tumbnail')}}" class="form-control" placeholder=" تصویر بندانگشتی ">
                                    @error('name')
                                    <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{$message}}
                                        </strong>
                                    </span>
                                @enderror
                                </div>
                            	<div class="col-md-12">
                                	<label>توضیحات</label>
                                    <textarea name="description" class="form-control"  rows="4"  placeholder="توضیحات">{{old('description')}}</textarea>
                                    @error('name')
                                    <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{$message}}
                                        </strong>
                                    </span>
                                @enderror
                                </div>
                            	
                            	<div class="col-md-6">
                                    <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- // col-md-8 -->

                    <div class="col-md-4">
                    	<a href="#"><img src="{{asset('demo_img/upload-adv.png')}}" alt=""></a>
                    </div><!-- // col-md-8 -->
                    <!-- // upload -->  
@endsection
