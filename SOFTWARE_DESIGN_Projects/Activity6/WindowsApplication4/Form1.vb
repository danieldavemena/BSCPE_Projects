Imports System.Data.SqlClient

Public Class Form1

    Dim totalQuantity As Integer
    Dim totalPrice As Decimal
    Dim vat As Decimal
    Dim stock As Integer
    Dim itemBarcode As String
    Dim selectedItem As String
    Dim price As Integer
    Dim textBoxQuantity As Integer
    Dim totalAmount As Decimal

    Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        conn()
        display()
        con.Close()
    End Sub

    Public Sub display()
        Dim query As String = "SELECT * from products"

        Using cmd As SqlCommand = New SqlCommand(query, con)
            Using dt As New DataTable()
                Using a As SqlDataAdapter = New SqlDataAdapter(cmd)
                    a.Fill(dt)
                    DataGridView1.DataSource = dt
                End Using
            End Using
        End Using
    End Sub

    Private Sub DataGridView1_CellContentClick(ByVal sender As System.Object, ByVal e As System.Windows.Forms.DataGridViewCellEventArgs) Handles DataGridView1.CellClick
        Dim i As Integer = 0

        If DataGridView1.SelectedRows.Count > 0 Then
            While i < DataGridView1.RowCount
                If DataGridView1.Rows(i).Selected Then
                    itemBarcode = DataGridView1.SelectedCells(0).Value.ToString()
                    selectedItem = DataGridView1.SelectedCells(1).Value.ToString()
                    Label1.Text = selectedItem
                    stock = DataGridView1.SelectedCells(2).Value
                    price = DataGridView1.SelectedCells(3).Value.ToString()
                End If
                i += 1
            End While
        End If
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Button2.Enabled = True
        textBoxQuantity = TextBox1.Text
        Dim availItems = stock - textBoxQuantity
        Dim query As String = "UPDATE products SET quantity=@quantity WHERE [Bar Code]=@barCode"

        If availItems < 0 Then
            textBoxQuantity = textBoxQuantity + availItems

            availItems = 0
        End If

        Dim itemPriceComputed = textBoxQuantity * price

        If Not (stock = 0) And Not (textBoxQuantity = 0) Then
            Dim rowCount As Integer = DataGridView2.Rows.Count + 1

            DataGridView2.Rows.Add(itemBarcode, selectedItem, textBoxQuantity, itemPriceComputed)
        End If

        vat += itemPriceComputed * 0.12
        totalQuantity += textBoxQuantity
        totalPrice += itemPriceComputed + vat

        Using cmd As New SqlCommand(query, con)
            cmd.Parameters.AddWithValue("@quantity", availItems)
            cmd.Parameters.AddWithValue("@barCode", itemBarcode)
            con.Open()
            cmd.ExecuteNonQuery()
            con.Close()
            display()
        End Using

        itemBarcode = ""
        selectedItem = ""
        stock = 0
        TextBox1.Clear()
        Label1.Text = ""
        Button1.Enabled = False
    End Sub

    Private Sub TextBox1_TextChanged(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox1.KeyPress
        If Char.IsLetter(e.KeyChar) Or Char.IsSymbol(e.KeyChar) Or Char.IsPunctuation(e.KeyChar) Or Char.IsWhiteSpace(e.KeyChar) Or selectedItem = "" Then
            e.Handled = True
        End If
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
            TextBox2.Text = totalQuantity
            TextBox3.Text = totalPrice
        TextBox4.Text = vat
    End Sub

    Private Sub TextBox5_Text(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox5.KeyPress
        If Char.IsLetter(e.KeyChar) Or Char.IsSymbol(e.KeyChar) Or Char.IsPunctuation(e.KeyChar) Or Char.IsWhiteSpace(e.KeyChar) Or TextBox2.Text = "" Then
            e.Handled = True
        End If
    End Sub

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        TextBox6.Text = TextBox5.Text - totalPrice
        MsgBox("Total Quantity: " & totalQuantity & vbCrLf & "Total Price: " & totalPrice & vbCrLf & "VAT 12%: " & vat & vbCrLf & "Total Amount: " & totalAmount & vbCrLf & "Change: " & TextBox6.Text)
        MsgBox("Transaction Completed")
        DataGridView2.Rows.Clear()
        totalQuantity = 0
        vat = 0
        totalPrice = 0
        TextBox1.Clear()
        TextBox2.Clear()
        TextBox3.Clear()
        TextBox4.Clear()
        TextBox5.Clear()
        TextBox6.Clear()
        Button1.Enabled = False
        Button2.Enabled = False
        Button3.Enabled = False
    End Sub

    Private Sub TextBox2_TextChanged(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox2.KeyPress
        e.Handled = True
    End Sub

    Private Sub TextBox3_TextChanged(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox3.KeyPress
        e.Handled = True
    End Sub

    Private Sub TextBox4_TextChanged(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox4.KeyPress
        e.Handled = True
    End Sub

    Private Sub TextBox6_TextChanged(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox6.KeyPress
        e.Handled = True
    End Sub

    Private Sub TextBox5_TextChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles TextBox5.TextChanged
        Double.TryParse(TextBox5.Text, totalAmount)

        If totalAmount < totalPrice Then
            Button3.Enabled = False
        End If

        If totalAmount > totalPrice Then
            Button3.Enabled = True
        End If
    End Sub

    Private Sub TextBox1_Text(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles TextBox1.TextChanged
        If (TextBox1.Text = "0" Or TextBox1.Text = "") Then
            Button1.Enabled = False
        Else
            Button1.Enabled = True
        End If
    End Sub
End Class

