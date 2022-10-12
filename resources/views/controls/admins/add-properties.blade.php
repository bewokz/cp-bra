@include('controls/admins.outline.header')

<div class="container mt-5">
    <h1>Tambah Produk</h1>
    <form action="/add-properties" method="POST" enctype="multipart/form-data" class="form">
      @csrf
        <div class="form-row">
          <div class="form-group col-6">
            <label for="inputProperties">Properties Name</label>
            <input type="properties" class="form-control" id="properties_name" name="properties_name" placeholder="Tuliskan Nama Produk">
          </div>
          <div class="form-group col-6">
            <label for="inputTypeHome">Type Home</label>
            <input type="Home" class="form-control" id="type" name="type" placeholder="Tuliskan Tipe Rumah">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="location" name="location" placeholder="Tuliskan Alamat Rumah">
        </div>
        <div class="form-row">
            <div class="form-group col-12">
                <label for="exampleFormControlFile1">Home Image</label>
                <input type="file" class="form-control" accept="image/*" id="image" name="image[]" multiple>
              </div>
            <div class="form-group col-12">
                <label for="exampleFormControlTextarea1">Properties Description</label>
                <textarea class="form-control" id="properties_description" name="properties_description" rows="4"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-6">
              <label for="inputPrice">Price</label>
              <input type="price" class="form-control" id="price" name="price" placeholder="Tuliskan Harga Produk">
            </div>
            <div class="form-group col-6">
              <label for="inputPhoneNumber">Phone Number</label>
              <input type="Phone Number" class="form-control" id="notelp" name="notelp" placeholder="Tuliskan Nomor Telepon">
            </div>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        

@include('controls/admins.outline.footer')