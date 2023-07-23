import tkinter as tk
from tkinter import ttk

class Store(tk.Tk):
    def __init__(self):
        super().__init__()
        self.title("🛒 Little Store 🛒")
        self.geometry("480x220")

        self.notebook = ttk.Notebook(self)

        self.tab_employee = ttk.Frame(self.notebook)
        self.tab_supplier = ttk.Frame(self.notebook)
        self.tab_product = ttk.Frame(self.notebook)
        self.tab_trade = ttk.Frame(self.notebook)

        self.notebook.add(self.tab_employee, text="Employee")
        self.notebook.add(self.tab_supplier, text="Supplier")
        self.notebook.add(self.tab_product, text="Product")
        self.notebook.add(self.tab_trade, text="Trade-in")
        self.notebook.pack(fill=tk.BOTH, expand=True)

        self.create_employee_widgets()
        self.create_supplier_widgets()
        self.create_product_widgets()
        self.create_trade_widgets()

    def create_employee_widgets(self):
        label1 = tk.Label(self.tab_employee, text="Sign in Employee 👨‍💼")
        label1.pack()

    def create_supplier_widgets(self):
        label2 = tk.Label(self.tab_supplier, text="Sign in Supplier 📦")
        label2.pack()

    def create_product_widgets(self):
        label3 = tk.Label(self.tab_product, text="Sign in Product 👜")
        label3.pack()

    def create_trade_widgets(self):
        label4 = tk.Label(self.tab_trade, text="Sign in Trade-in 🏪")
        label4.pack()

if __name__ == "__main__":
    app = Store()
    app.mainloop()