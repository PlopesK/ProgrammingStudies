import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class painel extends JFrame implements ActionListener
{
	JPanel painelBotoes, painelCard, p1, p2, p3;
	JButton b1, b2, b3, b4, b5, b6, btPainel1, btPainel2, btPainel3;
	JLabel label1, label2, label3;
	JTextField t1, t2;
	
	public static void main(String args[])
	{
		JFrame janela=new painel();
		janela.setUndecorated(true);
		janela.getRootPane().setWindowDecorationStyle(JRootPane.FRAME);
		janela.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		janela.setVisible(true);
	}
	
	painel()
	{
		setTitle("Uso do gerenciador CardLayout");
		setBounds(250, 50, 280, 170);
		getContentPane().setBackground(new Color(0,128,128));
		getContentPane().setLayout(new BorderLayout());
		
		/* ----------------------Botões---------------------- */
		b1 = new JButton ("Botão 1");	b2 = new JButton ("Botão 2");
		b3 = new JButton ("Botão 3");	b4 = new JButton ("Botão 4");
		b5 = new JButton ("Botão 5");	b6 = new JButton ("Botão 6");
		
		/* ----------------------Labels---------------------- */
		label1 = new JLabel ("Esse é o painel 1", JLabel.CENTER);
		label2 = new JLabel ("Esse é o painel 2", JLabel.CENTER);
		label3 = new JLabel ("Esse é o painel 3", JLabel.CENTER);
		
		/* ----------------------TextFields---------------------- */
		t1 = new JTextField ("Linguagem", 20);
		t2 = new JTextField ("Java", 10);
		
		/* ----------------------Painel---------------------- */
		btPainel1 = new JButton ("Painel 1");
		btPainel1.addActionListener(this);
		btPainel2 = new JButton ("Painel 2");
		btPainel2.addActionListener(this);
		btPainel3 = new JButton ("Painel 3");
		btPainel3.addActionListener(this);
		
		painelCard = new JPanel();
		painelCard.setLayout (new CardLayout());
		painelBotoes = new JPanel();
		painelBotoes.setLayout (new GridLayout(1,3));
		
		p1 = new JPanel();
		p1.setLayout((new FlowLayout()));
		p1.add(label1); p1.add(t1); p1.add(t2);
		
		p2 = new JPanel();
		p2.setLayout((new GridLayout(4,1)));
		p2.add(label2); p2.add(b1); p2.add(b2); p2.add(b3);
		
		p3 = new JPanel();
		p3.setLayout((new BorderLayout()));
		p3.add("North", b4); p3.add("Center", label3);
		p3.add("East", b5); p3.add("South", b6);
		
		painelBotoes.add(btPainel1);
		painelBotoes.add(btPainel2);
		painelBotoes.add(btPainel3);
		painelCard.add(p1, "p1");
		painelCard.add(p2, "p2");
		painelCard.add(p3, "p3");
		getContentPane().add("North",painelBotoes);
		getContentPane().add("South",painelCard);
	}
	
	public void actionPerformed(ActionEvent e)
	{
		CardLayout cl = (CardLayout) painelCard.getLayout();
		if (e.getSource() == btPainel1)  cl.show(painelCard, "p1");
		if (e.getSource() == btPainel2)  cl.show(painelCard, "p2");
		if (e.getSource() == btPainel3)  cl.show(painelCard, "p3");
	}
}
