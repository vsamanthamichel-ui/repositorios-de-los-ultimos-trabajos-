#CBTIS 89
#Karem Leyva
#2-a Programacion Matutino
#26 de Mayo del 2026
#Programa que calcula la compra de varios articulos
from tkinter import *
from tkinter import ttk
from tkinter import messagebox
def mostrar_carrera():
    try:

        art=comboa.get()
        if art == "Selecciona una articulo" or combod.get() == "Selecciona el descuento":
            messagebox.showwarning("Atención", "Por favor, selecciona un artículo y un descuento.")
            return
        cant=float(txt_art.get())
        pre=float(txt_pre.get())
        desc=float(combod.get().replace('%', '')) / 100
        totalP=cant*pre
        iva=totalP*0.16
        totali=totalP+(iva)
        descR=totali*desc
        totalR=totali-(descR)        
        resu.set(f"Articulo: {art}\nSubtotal: {totalP}\nIVA: {iva}\nDescuento: {descR}\nTotal a pagar: {totalR} ")
    except ValueError:
        messagebox.showerror("Error", "Por favor introduzca el precio real")
    

ventana = Tk()
ventana.title("Sistema de compra")
ventana.geometry("350x500")
ventana.configure(bg="#F780AE")

articulo=[
    "Camisas", 
    "Vestidos",
    "Pantalone",
    "Trajes",
    "Ropa interior", 
    "Pijamas", 
    "Ropa deportiva",
    "Zapatos formales",
    "Tenis", 
    "Sandalias" , 
    "Botas"
]

lbl_a = Label(ventana, text="Articulo:")
lbl_a.pack()
comboa=ttk.Combobox(ventana,values=articulo, state="readonly", font=("Arial",11))
comboa.pack(pady=10)
comboa.set("Selecciona una articulo")

lbl_pre = Label(ventana, text="Precio:")
lbl_pre.pack()
txt_pre = Entry(ventana,width=30)
txt_pre.pack(pady=10)
lbl_art = Label(ventana, text="Cantidad:")
lbl_art.pack()
txt_art = Entry(ventana,width=30)
txt_art.pack(pady=10)

descuento=[
    "0%",
    "5%",
    "10%",
    "15%",
    "20%",
    "25%",
    "50%",
    "55%",
    "75",
]

lbl_d = Label(ventana, text="Descuento:")
lbl_d.pack()
combod=ttk.Combobox(ventana,values=descuento, state="readonly", font=("Arial",11))
combod.pack(pady=10)
combod.set("Selecciona el descuento")

Button(ventana,text="Motrar seleccion",command=mostrar_carrera,width=20).pack(pady=10)
resu=StringVar()
resu_lb=Label(ventana,textvariable=resu, font=("Arial",12))
resu_lb.config(fg="#002088", bg="#F78090") 
resu_lb.pack(pady=10)
ventana.mainloop()