using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Navegador_web
{
    public partial class Form1 : Form
    {
        List<string> Favoritos = new List<string>();
        public Form1()
        {
            InitializeComponent();
        }

        private void btnAtras_Click(object sender, EventArgs e)
        {
            webBrowser1.GoBack();
        }

        private void btnGo_Click(object sender, EventArgs e)
        {
            webBrowser1.Navigate(URL.Text);
        }

        private void btnDelante_Click(object sender, EventArgs e)
        {
            webBrowser1.GoForward();
        }

        private void btnRefrescar_Click(object sender, EventArgs e)
        {
            webBrowser1.Refresh();
        }

        private void btnStop_Click(object sender, EventArgs e)
        {
            webBrowser1.Stop();
        }

        private void btnHome_Click(object sender, EventArgs e)
        {
            webBrowser1.GoHome();
        }

        private void btnFavoritos_Click(object sender, EventArgs e)
        {
            Favoritos.Add(webBrowser1.Url.ToString());
            actualizarcmb();
        }

        private void actualizarcmb()
        {
            foreach(string direccion in Favoritos)
            {
                cmb.Items.Add(direccion);
            }
        }

        private void cmb_Click(object sender, EventArgs e)
        {

        }

        private void cmb_SelectedIndexChanged(object sender, EventArgs e)
        {
            webBrowser1.Navigate(cmb.SelectedItem.ToString());
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            webBrowser1.Navigate("https://www.bing.com/?setlang=es");
        }
    }
}
