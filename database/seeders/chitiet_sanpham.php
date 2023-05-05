<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chitiet_sanpham extends Seeder
{
    public function run()
    {
        DB::table('chitiet_sanpham')->insert([ 
            ['idsanpham' => 'AE-1200WHD-1AVDF', 'idthuonghieu' => 'CASIO', 'idmau' => 'DEN', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nam', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Đồng hồ Casio AE-1200WHD-1AVDF có vỏ kim loại được phủ bạc tinh tế, kim chỉ và vạch số thiết kế thanh mảnh trên nền hoa văn hình trái tim trẻ trung, kết hợp dây đeo bằng chất liệu kim loại.', 
            'anh' => 'images/caqcN3nTKDNLltxXWXoCNt73x5fii6N1DzAVkS2ie.png', 'created_at' => date("Y-m-d H:i:s")],

            ['idsanpham' => 'NH8380-15E', 'idthuonghieu' => 'CITIZEN', 'idmau' => 'DEN', 'idloaimay' => 'AUTOMATIC', 'idchatlieu' => 'CAOSU', 
            'gioitinh' => 'Nam', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Đồng hồ Citizen NH8380-15E với mặt số kiểu to tròn phong cách thể thao mạnh mẽ, kim chỉ và vạch số thiết kế to dày nổi bật trên nền số màu đen, kết hợp với dây đeo cao su màu đen tạo nên vẻ nam tính.', 
            'anh' => 'images/gKrWxzmw0WR0CMq01ow9wFACJoItnUZTlxjC5GPM.png', 'created_at' => date("Y-m-d H:i:s")],

            ['idsanpham' => 'MTD-100D-7A2VDF', 'idthuonghieu' => 'CASIO', 'idmau' => 'TRANG', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nam', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Đồng hồ nam Casio MTD-100D-7A2VDF thiết kế theo phong cách thể thao với viền ngoài màu xanh in chữ trắng thời trang, ô lịch ngày thứ ở vi trí 3 giờ, vỏ máy cùng dây đeo kim loại mã bạc.', 
            'anh' => 'images/cO1bTjty9vOCKuEI2JlzUBIgbxdLhyKLSTtrcLgc.png', 'created_at' => date("Y-m-d H:i:s")],

            ['idsanpham' => 'SER02001W0', 'idthuonghieu' => 'ORIENT', 'idmau' => 'TRANG', 'idloaimay' => 'AUTOMATIC', 'idchatlieu' => 'SAPPHIRE', 
            'gioitinh' => 'Nam', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Đồng hồ Orient SER02001W0 bảo hành 12 tháng, cam kết mới 100%, hàng đẹp như mới', 
            'anh' => 'images/dong_ho_orient_ser02001w0.png', 'created_at' => date("Y-m-d H:i:s")],

            ['idsanpham' => 'FS5532', 'idthuonghieu' => 'FOSSIL', 'idmau' => 'DEN', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nam', 'xuatxu' => 'Mỹ', 
            'mota' => 'Mẫu Fossil FS5532 phiên bản tone màu đen trên mặt số size 44mm tương phản lên các vạch số phủ tone xanh nổi bật lên vẻ ngoài thể thao với thiết kế đầy nam tính.', 
            'anh' => 'images/ihPEY9EUHvzmFut4RNnChVmrPx278G14AxsTT7t2.png', 'created_at' => date("Y-m-d H:i:s")],

            ['idsanpham' => 'T099.407.11.058.00', 'idthuonghieu' => 'TISSOT', 'idmau' => 'DEN', 'idloaimay' => 'AUTOMATIC', 'idchatlieu' => 'SAPPHIRE', 
            'gioitinh' => 'Nam', 'xuatxu' => 'Thụy Sỹ', 
            'mota' => 'Mẫu Tissot T099.407.11.058.00 với kích thước mặt số tròn to đầy nam tính, dưới mặt kính Sapphire các vạch số cùng chữ số được gia công kiểu dáng mỏng đầy tinh tế, kết hợp cùng bộ dây đeo thép không gỉ màu bạc đầy sang trọng.', 
            'anh' => 'images/iSDKn04HT0O5j24YPFl1toNwUEwgaBP0Ap1gVfFn.png', 'created_at' => date("Y-m-d H:i:s")],

            ['idsanpham' => 'NH8363-14H', 'idthuonghieu' => 'CITIZEN', 'idmau' => 'DEN', 'idloaimay' => 'AUTOMATIC', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nam', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Đồng hồ nam Citizen NH8363-14H với phong cách cổ điển dành cho nam, kim chỉ và chữ số mạ vàng sang trọng nổi bật trên nền đen nam tính, kết hợp cùng với dây đeo bằng da nâu tạo vẻ sang trọng hoài cổ cho phái nam.', 
            'anh' => 'images/IskOV4SPka0ywa6fVZrylErQUQFpGqVCpVYdk4D3.png', 'created_at' => date("Y-m-d H:i:s")],

            ['idsanpham' => 'AW1370-51F', 'idthuonghieu' => 'CITIZEN', 'idmau' => 'DEN', 'idloaimay' => 'SOLAR', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nam', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Mẫu Citizen AW1370-51F tạo điểm ấn tượng khi đồng hồ được tích hợp công nghệ hiện đại Eco-Drive (Năng Lượng Ánh Sáng) với một vẻ ngoài giản dị cùng chi tiết vạch số tạo hình mỏng tinh tế.', 
            'anh' => 'images/mDwhyaH96NcYMF52ipP5Zi7F46B0pM8hpRmypax0.png', 'created_at' => date("Y-m-d H:i:s")],
            ['idsanpham' => 'SPC087P1', 'idthuonghieu' => 'SEIKO', 'idmau' => 'TRANG', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nam', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Đồng hồ thời trang cao cấp Seiko SPC087P1 mang phong cách thanh lịch cho nam giới, mặt nền trắng kết hợp với các chi tiết mạ vàng, dây da chính hãng có vân.', 
            'anh' => 'images/mEAtMlCXAFS5HKvB7NdkulvPkIofCzkkWxcva7qD.png', 'created_at' => date("Y-m-d H:i:s")],
            ['idsanpham' => 'BJ6481-58E', 'idthuonghieu' => 'CITIZEN', 'idmau' => 'DEN', 'idloaimay' => 'SOLAR', 'idchatlieu' => 'SAPPHIRE', 
            'gioitinh' => 'Nam', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Đồng hồ nam Citizen BJ6481-58E với thiết kế Pin sử dụng công nghệ hiện đại, kim chỉ và vạch số mạ bạc nổi bật trên nền đen, kết hợp với dây đeo bằng kim loại đem lại phong cách thời trang cho phái mạnh.', 
            'anh' => 'images/MYLEQH98S40KimRjaxfMNGw1U2xnU0fn3Y1WyJuS.png', 'created_at' => date("Y-m-d H:i:s")],
            ['idsanpham' => 'BGA-130-4BDR', 'idthuonghieu' => 'CASIO', 'idmau' => 'HONG', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nữ', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Đồng hồ Baby-G BGA-130-4BDR với phong cách thể thao cá tính dành cho nữ, chất liệu vỏ và dây đeo là nhựa siêu bền màu hồng bóng, chữ số màu trắng tinh tế, 2 kim độc đáo và 1 màng hình điện tử.', 
            'anh' => 'images/N5bP4uELtyYvQrJ2Y9Zz39DEnzR9MmXnpJTJ7lwm.png', 'created_at' => date("Y-m-d H:i:s")],
            ['idsanpham' => 'L4.209.2.32.2', 'idthuonghieu' => 'LONGINES', 'idmau' => 'VANG', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'SAPPHIRE', 
            'gioitinh' => 'Nữ', 'xuatxu' => 'Thụy Sỹ', 
            'mota' => 'Mẫu Longines L4.209.2.32.2 phiên bản dây da tạo hình vân lịch lãm trẻ trung cùng với thiết kế cọc vạch số kiểu dáng mỏng cách tân trên nền mặt số size 24mm.', 
            'anh' => 'images/Q2aM4cLayxMAY7HAXObRurOMJZhWJe9bnWq4PQJK.png', 'idthuonghieu' => 'DANIEL_WELLINGTON', 'idmau' => 'TRANG', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nữ', 'xuatxu' => 'Thụy Điển', 
            'mota' => 'Mẫu Daniel Wellington DW00100314  vỏ máy vàng hồng thiết kế mỏng 6mm tô điểm thêm vẻ ngoài thời trang khi kết hợp cùng mẫu dây vải trắng đầy cá tính cho phái đẹp.', 
            'anh' => 'images/NyKif0DhrpFsKmejBWsT66HZyvuFz44vn7cUWc25.png', 'created_at' => date("Y-m-d H:i:s")],
            ['idsanpham' => 'ER0182-59E', 'idthuonghieu' => 'CITIZEN', 'idmau' => 'DEN', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nữ', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Đồng hồ Citizen ER0182-59E có mặt số nhỏ gọn nền đen quyến rũ, kim chỉ và vạch số chỉ giờ được mạ vàng nổi bật, vỏ và dây đeo kim loại bằng chất liệu thép không gỉ tinh tế.', 
            'anh' => 'images/2cIqX57PzSCpRURvT0bBfEbxKjB7iRJxRiXhbstg.png', 'created_at' => date("Y-m-d H:i:s")],
            ['idsanpham' => 'SRKZ49P1', 'idthuonghieu' => 'SEIKO', 'idmau' => 'DEN', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nữ', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Mẫu Seiko SRKZ49P1 sang trọng nổi bật với chi tiết kim chỉ mạ vàng cùng vạch số tạo hình thanh mảnh trên mặt số đen size 35mm có họa tiết thời trang cho phái đẹp.', 
            'anh' => 'images/TBGd4UeegHxLmuq5RyuUTWNBEAnRc4KbG1gbNlUC.png', 'created_at' => date("Y-m-d H:i:s")],
            ['idsanpham' => 'SKK883P1', 'idthuonghieu' => 'SEIKO', 'idmau' => 'TRANG', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'SAPPHIRE', 
            'gioitinh' => 'Nữ', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Mẫu Seiko SKK883P1 vẻ ngoài thời trang nổi bật dành cho phái đẹp với thiết kế đính pha lê trên phần vỏ viền, kiểu dáng 3 kim đơn giản trên phiên bản mặt số trắng xà cừ size 33mm.', 
            'anh' => 'images/zhHyXUGu6AXQ1OUy8ZVGAVgzvlSx1xv0nmkJFpK8.png', 'created_at' => date("Y-m-d H:i:s")],
            ['idsanpham' => '96P214', 'idthuonghieu' => 'BULOVA', 'idmau' => 'TRANG', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nữ', 'xuatxu' => 'Thụy Sỹ / Mỹ', 
            'mota' => 'Mẫu Bulova 96P214 phiên bản 8 viên kim cương sang trọng đính trên mặt số trắng size 30mm, thiết kế đơn giản 2 kim kết hợp vỏ máy pin mạ bạc kiểu dáng mỏng chỉ 6mm.', 
            'anh' => 'images/ZV0vqo0n7oTKjUVlw1OTYzfM6AecIZl1MtrIpCSF.png', 'created_at' => date("Y-m-d H:i:s")],
            ['idsanpham' => 'SRZ464P1', 'idthuonghieu' => 'SEIKO', 'idmau' => 'VANG', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nữ', 'xuatxu' => 'Nhật Bản', 
            'mota' => 'Đồng hồ Seiko SRZ464P1 có mặt số tròn nhỏ nhắn với vỏ và dây đeo kim loại màu vàng sang trọng, kim chỉ và vạch số La Mã phủ màu đen nổi bật trên nền số màu trắng trang nhã, tạo nên phụ kiện thời trang quyến rũ.', 
            'anh' => 'images/S60d2gJoQZpD2DmyIvwqJElxrFSyy845Aqra8YXg.png', 'created_at' => date("Y-m-d H:i:s")],
            ['idsanpham' => 'C4572/1', 'idthuonghieu' => 'CANDINO', 'idmau' => 'TRANG', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'SAPPHIRE', 
            'gioitinh' => 'Nữ', 'xuatxu' => 'Thụy Sỹ', 
            'mota' => 'Đồng hồ cao cấp dành cho nữ Candino C4572/1 với mặt đồng hồ nền trắng cùng chất liệu thép không gỉ mạ vàng sang trọng, niềng có đính hạt tinh tế.', 
            'anh' => 'images/PAXfnZxCbjNY8v0RKtPHdrj2eSm6NZkVyA1p0rBM.png', 'created_at' => date("Y-m-d H:i:s")],
            ['idsanpham' => 'MK2779', 'idthuonghieu' => 'MICHAEL_KORS', 'idmau' => 'TRANG', 'idloaimay' => 'QUARTZ', 'idchatlieu' => 'CRYSTAL', 
            'gioitinh' => 'Nữ', 'xuatxu' => 'Mỹ', 
            'mota' => 'Mẫu Michael Kors MK2779 mặt số trắng đơn giản 3 kim với thiết kế size lớn 43mm tạo nên điểm nhấn khi phối cùng mẫu dây da trơn bản nhỏ tạo nên vẻ thời trang thanh lịch.', 
            'anh' => 'images/mDwhyaH96NcYMF52ipP5Zi7F46B0pM8hpRmypax0.png', 'created_at' => date("Y-m-d H:i:s")],
        ]);
    }
}
