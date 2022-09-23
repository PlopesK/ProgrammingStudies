import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class loja extends JFrame implements ActionListener
{
	JTextField t1;
	JMenuBar menuBar1;
	JMenu menuRoupas, menuUtensilios, menuRegistros;
	JMenuItem miCamiseta, miCalca, miJaqueta, miSapato, miSair, 
	muMeia, muLuva, muCachecol, muSair, 
	mirlRoupas, mirlUtensilios;
	public static void main(String args[])
	{
		JFrame janela= new loja();
		janela.setUndecorated(true);
		janela.getRootPane().setWindowDecorationStyle(JRootPane.FRAME);
		janela.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		janela.setVisible(true);
	}
	loja()
	{
		setTitle("🛒 Lojinha 🛒");
		setBounds(300,150,350,150);
		getContentPane().setBackground(new Color(135, 206, 235));
		getContentPane().setLayout(new GridLayout(4,4));
		t1 = new JTextField();
		menuBar1 = new JMenuBar();
		
		//-------------------------Roupas-------------------------
		menuRoupas = new JMenu("Roupas");
		miCamiseta = new JMenuItem("Camiseta");
		miCamiseta.addActionListener(this);
		miCalca = new JMenuItem("Calça");
		miCalca.addActionListener(this);
		miJaqueta = new JMenuItem("Jaquetas");
		miJaqueta.addActionListener(this);
		miSapato = new JMenuItem("Sapatos");
		miSapato.addActionListener(this);
		miSair = new JMenuItem("Sair do sistema");
		miSair.addActionListener(this);
		menuRoupas.add(miCamiseta);
		menuRoupas.add(miCalca);
		menuRoupas.add(miJaqueta);
		menuRoupas.add(miSapato);
		menuRoupas.add(miSair);
		
		//-------------------------Utensilios-------------------------
		menuUtensilios = new JMenu("Utensílios");
		muMeia = new JMenuItem("Meias");
		muMeia.addActionListener(this);
		muLuva = new JMenuItem("Luvas");
		muLuva.addActionListener(this);
		muCachecol = new JMenuItem("Cachecol");
		muCachecol.addActionListener(this);
		muSair = new JMenuItem("Sair do sistema");
		muSair.addActionListener(this);
		menuUtensilios.add(muMeia);
		menuUtensilios.add(muLuva);
		menuUtensilios.add(muCachecol);
		menuUtensilios.add(muSair);
		
		//-------------------------Resgistros-------------------------
		menuRegistros = new JMenu("Registros");
		mirlRoupas = new JMenuItem("Registro de Roupas");
		mirlRoupas.addActionListener(this);
		mirlUtensilios = new JMenuItem("Registro de Utensílios");
		mirlUtensilios.addActionListener(this);
		menuRegistros.add(mirlRoupas);
		menuRegistros.add(mirlUtensilios);
		menuBar1.add(menuRoupas);
		menuBar1.add(menuUtensilios);
		menuBar1.add(menuRegistros);
		setJMenuBar(menuBar1);
		getContentPane().add(t1);
	}
	public void actionPerformed(ActionEvent e)
	{
		if (e.getSource()==miCamiseta)
			t1.setText("Escolhido o item Camiseta 👕");
		if (e.getSource()==miCalca)
			t1.setText("Escolhido o item Calça 👖");
		if (e.getSource()==miJaqueta)
			t1.setText("Escolhido o item Jaquetas 👚");
		if (e.getSource()==miSapato)
			t1.setText("Escolhido o item Sapatos 👞");
		
		//----------------------------------------------------------
		
		if (e.getSource()==muMeia)
			t1.setText("Escolhido o item Meias 👟");
		if (e.getSource()==muLuva)
			t1.setText("Escolhido o item Luvas 🥊");
		if (e.getSource()==muCachecol)
			t1.setText("Escolhido o item Cachecol ⛄");
		
		//----------------------------------------------------------
		
		if (e.getSource()==mirlRoupas)
			t1.setText("Escolhido o item Registro de Roupas 👘");
		if (e.getSource()==mirlUtensilios)
			t1.setText("Escolhido o item Registro de Utensílios 💎");
		if (e.getSource()==miSair || e.getSource()==muSair)
			System.exit(0);
	}
}
