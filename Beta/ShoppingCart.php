<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" href="Css/otro.css">
<?php  include 'Nav.php'; ?>
<style type="text/css">
.letratexto {font-size: 14px}

</style>
</head>
<body>
<br />
<br />
<br />
<div id="Datos">
<div align="center">
  <p><img src="Images/Logo.PNG" width="253" height="133" /></p>
</div>
<div id="ShoppingCartTitle" runat="server" class="ContentHead">
        <h1>Carrito de Compras</h1>
    </div>
    <asp:GridView ID="CartList" runat="server" AutoGenerateColumns="False" ShowFooter="True" GridLines="Vertical" CellPadding="4" ItemType="ModRest.Models.CartItem" SelectMethod="GetShoppingCartItems" CssClass="table table-striped table-bordered" >
        <Columns>
            <asp:BoundField DataField="ProductID" HeaderText="ID" SortExpression="ProductID" />
            <asp:BoundField DataField="Product.ProductName" HeaderText="Producto" />
            <asp:BoundField DataField="Product.UnitPrice" HeaderText="Precio Unitario" DataFormatString="{0:c}"/>
            <asp:TemplateField HeaderText="Contidad">
                <ItemTemplate>
                    <asp:TextBox ID="PurchaseQuantity" Width="40" runat="server" Text="<%#: Item.Quantity %>"></asp:TextBox>
                </ItemTemplate>
            </asp:TemplateField>
            <asp:TemplateField HeaderText="Total">
                <ItemTemplate>
                    <%#: String.Format("{0:c}", ((Convert.ToDouble(Item.Quantity)) * Convert.ToDouble(Item.Product.UnitPrice)))%>
                </ItemTemplate>
            </asp:TemplateField>
            <asp:TemplateField HeaderText="Remover">
                <ItemTemplate>
                    <asp:CheckBox id="Remove" runat="server"></asp:CheckBox>
                </ItemTemplate>
            </asp:TemplateField>
        </Columns>
    </asp:GridView>
    <div>
        <p>
        </p>
        <strong>
            <asp:Label ID="LabelTotalText" runat="server" Text=" Total:"></asp:Label>
            <asp:Label ID="lblTotal" runat="server" EnableViewState="false"></asp:Label>
        </strong>
    </div>
    <br />
    <table>
        <tr>
            <td>
                <asp:Button ID="UpdateBtn" runat="server" Text="Actualizar" OnClick="UpdateBtn_Click" />
            </td>
            <td>
                <!--Checkout Placeholder -->
            </td>
        </tr>
    </table>
  <br />
  <br />
  <br />
  </p>
<footer id="Final">
  <p align="center"> &copy; 2018 - ModRest G1 Inc. </p>
  </footer>
</div>
</body>
</html>
