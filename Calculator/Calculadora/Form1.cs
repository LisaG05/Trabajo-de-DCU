using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Calculadora
{
    public partial class Form1 : Form
    {
        double primero;
        double segundo;
        double resultado;
        string operacion;


        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            txtPantalla.Clear();
        }

        private void btnN0_Click(object sender, EventArgs e)
        {
            txtPantalla.Text = txtPantalla.Text + "0";
        }

        private void btnN1_Click(object sender, EventArgs e)
        {
            txtPantalla.Text = txtPantalla.Text + "1";
        }

        private void btnN2_Click(object sender, EventArgs e)
        {
            txtPantalla.Text = txtPantalla.Text + "2";
        }

        private void btnN3_Click(object sender, EventArgs e)
        {
            txtPantalla.Text = txtPantalla.Text + "3";
        }

        private void btnN4_Click(object sender, EventArgs e)
        {
            txtPantalla.Text = txtPantalla.Text + "4";
        }

        private void btnN5_Click(object sender, EventArgs e)
        {
            txtPantalla.Text = txtPantalla.Text + "5";
        }

        private void btnN6_Click(object sender, EventArgs e)
        {
            txtPantalla.Text = txtPantalla.Text + "6";
        }

        private void btnN7_Click(object sender, EventArgs e)
        {
            txtPantalla.Text = txtPantalla.Text + "7";
        }

        private void btnN8_Click(object sender, EventArgs e)
        {
            txtPantalla.Text = txtPantalla.Text + "8";
        }

        private void btnN9_Click(object sender, EventArgs e)
        {
            txtPantalla.Text = txtPantalla.Text + "9";
        }

        private void btnPunto_Click(object sender, EventArgs e)
        {
            txtPantalla.Text = txtPantalla.Text + ".";
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void btnSumar_Click(object sender, EventArgs e)
        {
            operacion = "+";
            primero = double.Parse(txtPantalla.Text);
            txtPantalla.Clear();
        }

        private void btnRestar_Click(object sender, EventArgs e)
        {
            operacion = "-";
            primero = double.Parse(txtPantalla.Text);
            txtPantalla.Clear();
        }

        private void btnDivision_Click(object sender, EventArgs e)
        {
            operacion = "/";
            primero = double.Parse(txtPantalla.Text);
            txtPantalla.Clear();
        }

        private void btnMultiplicar_Click(object sender, EventArgs e)
        {
            operacion = "*";
            primero = double.Parse(txtPantalla.Text);
            txtPantalla.Clear();
        }

        private void btnRaiz_Click(object sender, EventArgs e)
        {
            operacion = "√";
            primero = double.Parse(txtPantalla.Text);
            resultado = primero;
            txtPantalla.Text = Math.Sqrt(primero).ToString();
            
        }

        private void btnIgual_Click(object sender, EventArgs e)
        {
            segundo = double.Parse(txtPantalla.Text);

            switch (operacion)
            {
                case "+":
                    resultado = primero + segundo;
                    txtPantalla.Text = resultado.ToString();
                    break;

                case "-":
                    resultado = primero - segundo;
                    txtPantalla.Text = resultado.ToString();
                    break;

                case "*":
                    resultado = primero * segundo;
                    txtPantalla.Text = resultado.ToString();
                    break;

                case "/":
                    resultado = primero / segundo;
                    txtPantalla.Text = resultado.ToString();
                    break;

            }
        }
    }
}
