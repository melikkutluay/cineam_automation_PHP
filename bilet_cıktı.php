<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title></title>
    <link href="css/ticket.css" rel="stylesheet" />
</head>
<body>
    <form id="form1" runat="server">
        <asp:Panel ID="Panel1" runat="server">
            <asp:Button ID="Button1" runat="server" Text="Anasayfa" OnClick="Button1_Click1" BackColor="#333333" ForeColor="White" />
            <asp:Button ID="Button2" runat="server" Text="Yazdır" OnClick="Button2_Click" BackColor="#333333" ForeColor="White" />
        </asp:Panel>

        <asp:Panel ID="Panel2" runat="server">
            <div class="cardWrap">
  <div class="card cardLeft">
    <h1>Startup <span>Cinema</span></h1>
    <div class="title">
      <h2><asp:Label ID="ticket_movie" runat="server" Text="Label"></asp:Label></h2>
      <span></span>
    </div>
    <div class="name">
      <h2><asp:Label ID="ticket_name" runat="server" Text="Label"></asp:Label><br /><asp:Label ID="ticket_surname" runat="server" Text="Label"></asp:Label></h2>
      <span></span>
    </div>
    <div class="seat">
      <h2><asp:Label ID="ticket_seat" runat="server" Text="Label"></asp:Label></h2>
      <span>seat</span>
    </div>
    <div class="time">
      <h2><asp:Label ID="ticket_time" runat="server" Text="Label"></asp:Label></h2>
      <span>time</span>
    </div>
  </div>
  <div class="card cardRight">
    <div class="eye"></div>
    <div class="number">
      <h4><asp:Label ID="ticket_pnr" runat="server" Text=""></asp:Label></h4>
      <span>PNR Code</span>
    </div>
    <div class="barcode"></div>
  </div>
</div>
        </asp:Panel>
    </form>
</body>
</html>
