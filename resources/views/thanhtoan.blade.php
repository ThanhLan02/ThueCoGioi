@extends('layout.master')

@section('main-content')

<div class="row " >
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card rounded-0 shadow text-center">
				<div class="card-header">
					<div class="card-title h6 fw-bold">Nhập thông tin để thanh toán</div>
				</div>
				<div class="card-body container-fluid">
					<form method="post" class="form-horizontal" action="{{( route('thuethietbi.thanhtoanstore') )}}">
                    @csrf
                        <div class="mb-3">
							<label for="name" class="control-label">Người Nhận</label>
							<input type="text" name="NguoiChoThue" class="form-control rounded-0 text-center" value="{{Session::get('username')}}" readonly>
						</div>
                        <br/>
                        <div class="mb-3">
							<label for="name" class="control-label">SĐT</label>
							<input type="text" name="SDT" class="form-control rounded-0 text-center" value="">
						</div>
                        <br/>
						<div class="mb-3">
							<label for="name" class="control-label">Address</label>
							<br/>
							<select name="city" id="province">
							</select>
							<select name="district" id="district">
								<option value="">chọn quận</option>
							</select>
							<select name="ward" id="ward">
								<option value="">chọn phường</option>
							</select>
                            <br/><br/>
							<input type="text" name="DiaChi" id="result" class="form-control rounded-0 text-center" value="">
						</div>
						<div class="mb-3">
							<label for="city" class="control-label">Tổng Tiền</label>
                            <input type="text" name="TongTien" class="form-control rounded-0 text-center" value="{{$kq}}" style="display: none;" >
							<input type="text" name="TongTienf" class="form-control rounded-0 text-center" value="{{$format}} VNĐ" readonly>
						</div>
                        <br/>
						<div class="mb-3 d-grid">
                        <button type="submit" name="send" value="send" class="btn btn-primary align-center">THUÊ</button>
						</div>
					</form>
					<p class="fw-light fst-italic"><small class="text-muted">Cảm ơn bạn đã thuê, chúc bạn một ngày tốt lành</small></p>
				</div>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const host = "https://provinces.open-api.vn/api/";
        var callAPI = (api) => {
            return axios.get(api)
                .then((response) => {
                    renderData(response.data, "province");
                });
        }
        callAPI('https://provinces.open-api.vn/api/?depth=1');
        var callApiDistrict = (api) => {
            return axios.get(api)
                .then((response) => {
                    renderData(response.data.districts, "district");
                });
        }
        var callApiWard = (api) => {
            return axios.get(api)
                .then((response) => {
                    renderData(response.data.wards, "ward");
                });
        }

        var renderData = (array, select) => {
            let row = ' <option disable value="">chọn</option>';
            array.forEach(element => {
                row += `<option value="${element.code}">${element.name}</option>`
            });
            document.querySelector("#" + select).innerHTML = row
        }

        $("#province").change(() => {
            callApiDistrict(host + "p/" + $("#province").val() + "?depth=2");
            printResult();
        });
        $("#district").change(() => {
            callApiWard(host + "d/" + $("#district").val() + "?depth=2");
            printResult();
        });
        $("#ward").change(() => {
            printResult();
        })

        var printResult = () => {
            if ($("#district").val() != "" && $("#province").val() != "" &&
                $("#ward").val() != "") {
                let result = $("#province option:selected").text() +
                    " , " + $("#district option:selected").text() + " , " +
                    $("#ward option:selected").text();
                $("#result").text(result)
                document.getElementById("result").value = result;
            }

        }
    </script>
@endsection