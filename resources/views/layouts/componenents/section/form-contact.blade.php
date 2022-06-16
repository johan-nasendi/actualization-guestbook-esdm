<div class="contact__container grid">
    <div class="contact__box">
        <h2 class="section__title">
            Forum  <br> Buku Tamu
        </h2>

        <div class="contact__data">
            <div class="contact__information">
                <h3 class="contact__subtitle">Hubungi kami untuk dukungan instan</h3>
                <span class="contact__description">
                        <i class="ri-phone-line contact__icon"></i>
                        +999 888 777
                    </span>
            </div>

            <div class="contact__information">
                <h3 class="contact__subtitle">Dapat mengirim surat melalui E-mail kami</h3>
                <span class="contact__description">
                        <i class="ri-mail-line contact__icon"></i>
                        user@email.com
                    </span>
            </div>
        </div>
    </div>

    <form action="{{route('guest.store')}}" method="POST" class="contact__form" >
        @csrf
        <div class="contact__inputs">
            <div class="contact__content">
                <input type="hidden" name="status" value="active">
                <input type="text" name="name" value="{{old('name')}}" required="" placeholder=""
                class="contact__input @error('name') is-invalid @enderror">
                <label for="" class="contact__label">Nama Lengkap</label>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
            </div>

            <div class="contact__content">
                <input type="number" name="mobile_phone_number" required="" value="{{old('mobile_phone_number')}}" placeholder=" "
                class="contact__input @error('mobile_phone_number') is-invalid @enderror">
                <label for="" class="contact__label">No.Handphone</label>
                @error('mobile_phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
            </div>

            <div class="contact__content">
                <input type="text" name="institution" required="" value="{{old('institution')}}" placeholder=" "
                class="contact__input @error('institution') is-invalid @enderror">
                <label for="" class="contact__label">Asal Instansi/Perusahaan</label>
                @error('institution')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
            </div>

            <div class="contact__content">
                <input type="text" name="position" required="" value="{{old('position')}}" placeholder=" "
                class="contact__input @error('position') is-invalid @enderror">
                <label for="" class="contact__label">Jabatan</label>
                @error('position')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
            </div>

            <div class="contact__content">
                <input type="date" name="dates" required="" value="{{old('dates')}}" placeholder=" "
                class="contact__input @error('dates') is-invalid @enderror">
                <label for="" class="contact__label">Tanggl</label>
                @error('dates')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
            </div>

            <div class="contact__content">
                <input type="time" name="times" required="" value="{{old('times')}}" placeholder=""
                class="contact__input  @error('times') is-invalid @enderror ">
                <label for="" class="contact__label">Jam</label>
                @error('times')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
            </div>

            <div class="contact__content contact__area">
                <textarea name="necessities" required="" placeholder="" class="contact__input  @error('necessities') is-invalid @enderror">{{old('necessities')}}</textarea>
                <label for="" class="contact__label">Keperluan</label>
                @error('necessities')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror

            </div>

        </div>

        <button type="submit" class="button button--flex">
               Kirim <i class="ri-send-plane-fill"></i>
        </button>
    </form>
</div>
