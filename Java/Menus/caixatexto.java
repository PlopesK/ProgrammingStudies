import java.awt.*;
import java.awt.event.*;
import javax.swing.*;
import javax.swing.event.*;

import java.awt.event.*;
import javax.swing.*;

public class caixatexto extends JFrame implements ListSelectionListener, ActionListener
{
		JLabel label1;
		JTextField t1;
		JList lista;
		JButton bquant, bindice, bclear;
		DefaultListModel listModel;
		
		public static void main(String args[])
		{
			JFrame janela = new caixatexto();
			janela.setUndecorated(true);
			janela.getRootPane().setWindowDecorationStyle(JRootPane.FRAME);
			janela.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
			janela.setVisible(true);
		}
		
		caixatexto()
		{
			setTitle("Uso do JList");
			setBounds(300,50,200,250);
			
			t1 = new JTextField();
			t1.addActionListener(this);
			
			label1 = new JLabel("Sem seleção");
			label1.setForeground(Color.black);
			
			bquant = new JButton ("Quantidade de itens");
			bquant.addActionListener(this);
			
			bindice = new JButton ("Indice Selecionado");
			bindice.addActionListener(this);
			
			bclear = new JButton ("Remover item");
			bclear.addActionListener(this);
			
			listModel = new DefaultListModel();
			listModel.addElement("Banana");
			listModel.addElement("Pera");
			listModel.addElement("Maça");
			listModel.addElement("Uva");
			lista = new JList(listModel);
			lista.addListSelectionListener(this);
			JScrollPane Painel = new JScrollPane(lista);
			
			getContentPane().setLayout(new GridLayout(6,1));
			getContentPane().add(label1);
			getContentPane().add(t1);
			getContentPane().add(Painel);
			getContentPane().add(bquant);
			getContentPane().add(bindice);
			getContentPane().add(bclear);
		}
		
		public void actionPerformed(ActionEvent e)
		{
			if (e.getSource()==t1)
			{
				listModel.addElement(t1.getText());
				t1.setText("");
			}
			
			if(e.getSource()==bquant)
				t1.setText("Quantidade: " + listModel.getSize());
			
			if(e.getSource()==bindice)
				t1.setText("Indice selecionado: " + lista.getSelectedIndex());
			if(e.getSource()==bclear)
			{
				int index = lista.getSelectedIndex();
				label1.setText("Removido: " + lista.getSelectedValue());
				listModel.remove(index);
			}
		}
		
		public void valueChanged(ListSelectionEvent e)
		{
			if (lista.getSelectedValue() != null)
				label1.setText("Selecionado: " + lista.getSelectedValue());
		}
}
