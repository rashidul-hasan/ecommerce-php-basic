USE [master]
GO
/****** Object:  Database [GADGETLAND]    Script Date: 18-Mar-15 8:04:38 PM ******/
CREATE DATABASE [GADGETLAND]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'GADGETLAND', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL12.SQLEXPRESS\MSSQL\DATA\GADGETLAND.mdf' , SIZE = 3264KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB )
 LOG ON 
( NAME = N'GADGETLAND_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL12.SQLEXPRESS\MSSQL\DATA\GADGETLAND_log.ldf' , SIZE = 832KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
GO
ALTER DATABASE [GADGETLAND] SET COMPATIBILITY_LEVEL = 120
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [GADGETLAND].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [GADGETLAND] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [GADGETLAND] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [GADGETLAND] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [GADGETLAND] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [GADGETLAND] SET ARITHABORT OFF 
GO
ALTER DATABASE [GADGETLAND] SET AUTO_CLOSE ON 
GO
ALTER DATABASE [GADGETLAND] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [GADGETLAND] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [GADGETLAND] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [GADGETLAND] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [GADGETLAND] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [GADGETLAND] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [GADGETLAND] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [GADGETLAND] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [GADGETLAND] SET  ENABLE_BROKER 
GO
ALTER DATABASE [GADGETLAND] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [GADGETLAND] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [GADGETLAND] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [GADGETLAND] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [GADGETLAND] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [GADGETLAND] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [GADGETLAND] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [GADGETLAND] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [GADGETLAND] SET  MULTI_USER 
GO
ALTER DATABASE [GADGETLAND] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [GADGETLAND] SET DB_CHAINING OFF 
GO
ALTER DATABASE [GADGETLAND] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [GADGETLAND] SET TARGET_RECOVERY_TIME = 0 SECONDS 
GO
ALTER DATABASE [GADGETLAND] SET DELAYED_DURABILITY = DISABLED 
GO
USE [GADGETLAND]
GO
/****** Object:  Table [dbo].[CATEGORY]    Script Date: 18-Mar-15 8:04:38 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CATEGORY](
	[CategoryId] [int] IDENTITY(1,1) NOT NULL,
	[CategoryName] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_CATEGORY] PRIMARY KEY CLUSTERED 
(
	[CategoryId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[CUSTOMERS]    Script Date: 18-Mar-15 8:04:38 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CUSTOMERS](
	[CustomerId] [int] NOT NULL,
	[FirstName] [nvarchar](50) NOT NULL,
	[LastName] [nvarchar](50) NOT NULL,
	[Address] [nvarchar](50) NOT NULL,
	[City] [nvarchar](50) NOT NULL,
	[Country] [nvarchar](50) NOT NULL,
	[Phone] [int] NOT NULL,
	[E-Mail] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_CUSTOMERS] PRIMARY KEY CLUSTERED 
(
	[CustomerId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[ORDER_DETAILS]    Script Date: 18-Mar-15 8:04:38 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ORDER_DETAILS](
	[OrderDetailsId] [int] IDENTITY(1,1) NOT NULL,
	[OrderId] [int] NOT NULL,
	[ProductId] [int] NOT NULL,
	[Price] [money] NOT NULL,
	[Quantity] [smallint] NOT NULL,
	[Total] [money] NOT NULL,
	[BillDate] [date] NOT NULL,
 CONSTRAINT [PK_ORDER_DETAILS] PRIMARY KEY CLUSTERED 
(
	[OrderDetailsId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[ORDERS]    Script Date: 18-Mar-15 8:04:38 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ORDERS](
	[OrderId] [int] IDENTITY(1,1) NOT NULL,
	[CustomerId] [int] NOT NULL,
	[OrderDate] [date] NOT NULL,
	[PaymentId] [int] NOT NULL,
	[PaymentDate] [date] NOT NULL,
	[ShipmentDate] [date] NOT NULL,
 CONSTRAINT [PK_ORDERS] PRIMARY KEY CLUSTERED 
(
	[OrderId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[PAYMENT]    Script Date: 18-Mar-15 8:04:38 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[PAYMENT](
	[PaymentId] [int] IDENTITY(1,1) NOT NULL,
	[PaymentType] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_PAYMENT] PRIMARY KEY CLUSTERED 
(
	[PaymentId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[PRODUCTS]    Script Date: 18-Mar-15 8:04:38 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[PRODUCTS](
	[ProductId] [int] IDENTITY(1,1) NOT NULL,
	[ProductName] [nvarchar](50) NOT NULL,
	[SupplierId] [int] NOT NULL,
	[CategoryId] [int] NOT NULL,
	[UnitPrice] [money] NOT NULL,
 CONSTRAINT [PK_PRODUCT] PRIMARY KEY CLUSTERED 
(
	[ProductId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[SUPPLIERS]    Script Date: 18-Mar-15 8:04:38 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SUPPLIERS](
	[SupplierId] [int] IDENTITY(1,1) NOT NULL,
	[CompanyName] [nvarchar](50) NOT NULL,
	[ContactName] [nvarchar](50) NOT NULL,
	[Address] [nvarchar](50) NOT NULL,
	[City] [nvarchar](50) NOT NULL,
	[Country] [nvarchar](50) NOT NULL,
	[Phone] [int] NOT NULL,
	[E-Mail] [nvarchar](50) NOT NULL,
	[PaymentType] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_SUPPLIERS] PRIMARY KEY CLUSTERED 
(
	[SupplierId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
ALTER TABLE [dbo].[ORDER_DETAILS]  WITH CHECK ADD  CONSTRAINT [FK_ORDER_DETAILS_ORDERS] FOREIGN KEY([OrderId])
REFERENCES [dbo].[ORDERS] ([OrderId])
GO
ALTER TABLE [dbo].[ORDER_DETAILS] CHECK CONSTRAINT [FK_ORDER_DETAILS_ORDERS]
GO
ALTER TABLE [dbo].[ORDER_DETAILS]  WITH CHECK ADD  CONSTRAINT [FK_ORDER_DETAILS_PRODUCTS] FOREIGN KEY([ProductId])
REFERENCES [dbo].[PRODUCTS] ([ProductId])
GO
ALTER TABLE [dbo].[ORDER_DETAILS] CHECK CONSTRAINT [FK_ORDER_DETAILS_PRODUCTS]
GO
ALTER TABLE [dbo].[ORDERS]  WITH CHECK ADD  CONSTRAINT [FK_ORDERS_CUSTOMERS] FOREIGN KEY([CustomerId])
REFERENCES [dbo].[CUSTOMERS] ([CustomerId])
GO
ALTER TABLE [dbo].[ORDERS] CHECK CONSTRAINT [FK_ORDERS_CUSTOMERS]
GO
ALTER TABLE [dbo].[ORDERS]  WITH CHECK ADD  CONSTRAINT [FK_ORDERS_PAYMENT] FOREIGN KEY([PaymentId])
REFERENCES [dbo].[PAYMENT] ([PaymentId])
GO
ALTER TABLE [dbo].[ORDERS] CHECK CONSTRAINT [FK_ORDERS_PAYMENT]
GO
ALTER TABLE [dbo].[PRODUCTS]  WITH CHECK ADD  CONSTRAINT [FK_PRODUCTS_CATEGORY] FOREIGN KEY([CategoryId])
REFERENCES [dbo].[CATEGORY] ([CategoryId])
GO
ALTER TABLE [dbo].[PRODUCTS] CHECK CONSTRAINT [FK_PRODUCTS_CATEGORY]
GO
ALTER TABLE [dbo].[PRODUCTS]  WITH CHECK ADD  CONSTRAINT [FK_PRODUCTS_SUPPLIERS] FOREIGN KEY([SupplierId])
REFERENCES [dbo].[SUPPLIERS] ([SupplierId])
GO
ALTER TABLE [dbo].[PRODUCTS] CHECK CONSTRAINT [FK_PRODUCTS_SUPPLIERS]
GO
USE [master]
GO
ALTER DATABASE [GADGETLAND] SET  READ_WRITE 
GO
