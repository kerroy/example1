<?php


class Server
{
    public $products = [
            "box1" => [
            "title" => "Box #1",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras luctus dolor a purus auctor, ut tristique justo congue. 
                        In sit amet placerat risus, in venenatis nunc. Duis iaculis, orci eget consequat rutrum, magna tellus interdum elit, 
                        id lobortis nisl ligula sit amet risus. Donec at nisi lorem. Sed vel venenatis est. Maecenas auctor lorem efficitur, 
                        ullamcorper tellus et, volutpat sapien. Aliquam posuere orci eu mattis tincidunt. Nullam id pharetra urna."
        ],
        "box2" => [
            "title" => "Box #2",
            "body" => "Etiam blandit libero at commodo malesuada. Donec a pulvinar tellus. Mauris vitae blandit felis, id aliquet orci. 
                    Duis eget turpis sollicitudin, facilisis nunc at, tincidunt ipsum. Maecenas elementum nec elit a finibus. 
                    Nulla tortor risus, convallis quis consectetur vitae, porttitor id ligula. Nullam vel nibh ligula. Vivamus mollis tristique lacinia."
        ],
        "box3" => [
            "title" => "Box #3",
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
        // Of course, you should always validate any data you receive from outside
        return "<div>
                <h2>".$this->products[$product]['title']."</h2>
                <p>".$this->products[$product]['body']."</p>
                </div>";
    }
}

$server = new Server();

if (!empty($_POST)) {
    if ($_POST['boxClicked']=="box1" || $_POST['boxClicked']=="box2" || $_POST['boxClicked']=="box3") {
        echo $server->get_product_details($_POST['boxClicked']);
    }

}
