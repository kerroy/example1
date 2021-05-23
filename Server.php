<?php


class Server
{
    public $products = [
        "tennis" => [
            "title" => "Tennis",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras luctus dolor a purus auctor, ut tristique justo congue. 
                        In sit amet placerat risus, in venenatis nunc. Duis iaculis, orci eget consequat rutrum, magna tellus interdum elit, 
                        id lobortis nisl ligula sit amet risus. Donec at nisi lorem. Sed vel venenatis est. Maecenas auctor lorem efficitur, 
                        ullamcorper tellus et, volutpat sapien. Aliquam posuere orci eu mattis tincidunt. Nullam id pharetra urna."
        ],
        "football" => [
            "title" => "American Football",
            "body" => "Etiam blandit libero at commodo malesuada. Donec a pulvinar tellus. Mauris vitae blandit felis, id aliquet orci. 
                    Duis eget turpis sollicitudin, facilisis nunc at, tincidunt ipsum. Maecenas elementum nec elit a finibus. 
                    Nulla tortor risus, convallis quis consectetur vitae, porttitor id ligula. Nullam vel nibh ligula. Vivamus mollis tristique lacinia."
        ],
        "vollyball" => [
            "title" => "Volleyball",
            "body" => "Pellentesque molestie ac eros hendrerit suscipit. Cras tincidunt a nisl ac tincidunt. Pellentesque habitant morbi 
                    tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam consectetur interdum nunc in volutpat. 
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris sed molestie quam. 
                    Praesent at nunc sed lacus facilisis laoreet eget ut leo. Suspendisse vitae tristique eros. Donec sit amet ex eget turpis tincidunt posuere. "
        ]
    ];

    public function get_product_details($product) {
        // should have a connection to DB but as it is an example
        // I will assume the connection is there and working and
        // the data is returned correctly.
        return json_encode($this->products[$product]);
    }
}

// checking if request was sent
if (!empty($_POST)) {

    if ($_POST['product']=="tennis" || $_POST['product']=="football" || $_POST['product']=="vollyball") {
        $server = new Server();

        echo $server->get_product_details($_POST['product']);
    }

}
