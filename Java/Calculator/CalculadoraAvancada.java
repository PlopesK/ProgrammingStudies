import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class calculadora extends JFrame implements ActionListener
{
	JLabel label1, label2, label3;
	JButton b1, b2, b3, b4, b5;
	JTextField t1, t2, t3;
	public static void main(String args[])
	{
		JFrame janela= new calculadora();
		janela.setUndecorated(true);
		janela.getRootPane().setWindowDecorationStyle(JRootPane.FRAME);
		janela.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		janela.setVisible(true);
	}
	
	calculadora()
	{
		setTitle("Calculadora");
		setBounds(300,50,350,90);
		getContentPane().setBackground(new Color(150,150,150));
		getContentPane().setLayout(new GridLayout(3,4));
		label1 = new JLabel("Num.1");
		label1.setForeground(Color.black);
		label1.setFont(new Font("", Font.BOLD,14));
		label2 = new JLabel("Num.2");
		label2.setForeground(Color.black);label2.setFont(new Font("",Font.BOLD,14));
		label3 = new JLabel("Total");
		label3.setFont(new Font("",Font.BOLD,14));
		
		b1 = new JButton ("+");				b1.addActionListener(this);
		b2 = new JButton ("-");				b2.addActionListener(this);
		b3 = new JButton ("x");				b3.addActionListener(this);
		b4 = new JButton ("/");				b4.addActionListener(this);
		b5 = new JButton ("Limpar");		b5.addActionListener(this);
		b5.setBackground(Color.black);		b5.setForeground(Color.white);
		
		t1 = new JTextField();				t2 = new JTextField();
		t3 = new JTextField();				t3.setEditable(false);
		getContentPane().add(label1);		getContentPane().add(t1);
		getContentPane().add(b1);			getContentPane().add(b2);
		getContentPane().add(label2);		getContentPane().add(t2);
		getContentPane().add(b3);			getContentPane().add(b4);
		getContentPane().add(label3);		getContentPane().add(t3);
		getContentPane().add(b5);
	}
	
	public void actionPerformed(ActionEvent e)
	{
		if (e.getSource()==b5)
		{
			t1.setText(""); t2.setText(""); t3.setText("");
			return;
		}
		float n1=0, n2=0, result=0;
		try
		{
			n1 = Float.parseFloat(t1.getText());
			n2 = Float.parseFloat(t2.getText());
		}
		catch (NumberFormatException erro)
		{
			t3.setText("Erro");
			return;
		}
		if (e.getSource()==b1) result = n1 + n2;
		if (e.getSource()==b2) result = n1 - n2;
		if (e.getSource()==b3) result = n1 * n2;
		if (e.getSource()==b4) result = n1 / n2;
		t3.setText("" + result);
	}
}
