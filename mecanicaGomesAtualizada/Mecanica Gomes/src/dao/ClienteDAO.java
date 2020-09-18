/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dao;

import conexao.FabricaConexao;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import model.Cliente;


public class ClienteDAO {
     public boolean create(Cliente cliente) {
        if (cliente == null) {
            throw new IllegalArgumentException();
        }
        String sql = "INSERT INTO cliente (nome, email,senha,endereco,telefone) VALUES (?,?,?,?,?)";
        try (Connection conn = FabricaConexao.getConexao(); PreparedStatement ps = conn.prepareStatement(sql)) {
            ps.setString(1, cliente.getNome());
            ps.setString(2, cliente.getEmail());
            ps.setString(3, cliente.getSenha());
            ps.setString(4, cliente.getEndereco());
            ps.setString(5, cliente.getTelefone());
            int linhasAfetadas = ps.executeUpdate();
            if (linhasAfetadas > 0) {
                return true;
            }

        } catch (SQLException e) {
            e.printStackTrace();
        }
        return false;
    }

    public List<Cliente> getAll() {
        String sql = "SELECT * FROM cliente";
        ResultSet rs = null;
        List<Cliente> allCliente = new ArrayList<>();
        try (
                Connection conn = FabricaConexao.getConexao();
                PreparedStatement ps = conn.prepareStatement(sql)) {
            rs = ps.executeQuery();

            while (rs.next()) {
                Cliente p = new Cliente();
                p.setId_cliente(rs.getInt("id_cliente"));
                p.setNome(rs.getString("nome"));
                p.setEmail(rs.getString("email"));
                p.setSenha(rs.getString("senha"));
                p.setEndereco(rs.getString("endereco"));
                p.setTelefone(rs.getString("telefone"));
                allCliente.add(p);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            FabricaConexao.fecharConexao(rs);
        }
        return allCliente;
    }

    public Cliente getById(Integer id) {
        if (id == null || id < 0) {
            throw new IllegalArgumentException();
        }
        String sql = "SELECT * FROM cliente WHERE id_peca=?";
        ResultSet rs = null;
        Cliente p = null;
        try (Connection conn = FabricaConexao.getConexao(); PreparedStatement ps = conn.prepareStatement(sql)) {
            ps.setInt(1, id);
            rs = ps.executeQuery();
            rs.next();

            p = new Cliente();
            p.setId_cliente(rs.getInt("id_cliente"));
            p.setNome(rs.getString("nome"));
            p.setEmail(rs.getString("email"));
            p.setSenha(rs.getString("senha"));
            p.setEndereco(rs.getString("endereco"));
            p.setTelefone(rs.getString("telefone"));


        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            FabricaConexao.fecharConexao(rs);
        }
        return p;
    }

    public boolean update(Cliente cliente) {
        if (cliente == null || cliente.getId_cliente()<= 0 || cliente.getId_cliente()<= 0) {
            throw new IllegalArgumentException();
        }
        String sql = "UPDATE cliente SET nome = ?,email = ?, senha=?, endereco = ? , telefone = ? WHERE id_cliente = ?";
        try (Connection conn = FabricaConexao.getConexao(); PreparedStatement ps = conn.prepareStatement(sql)) {
            ps.setString(1, cliente.getNome() );
            ps.setString(2, cliente.getEmail());
            ps.setString(3, cliente.getSenha());
            ps.setString(4, cliente.getEndereco());
            ps.setString(5, cliente.getTelefone());
            ps.setInt(6, cliente.getId_cliente());
            
            
            int linhasAfetadas = ps.executeUpdate();
            if (linhasAfetadas > 0) {
                return true;
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return false;
    }
    public boolean delete(Integer id) {
		if (id == null || id < 0) {
			throw new IllegalArgumentException();
		}
		String sql = "DELETE FROM cliente WHERE id_cliente= ?";
		try 
                    (Connection conn = FabricaConexao.getConexao();
                        PreparedStatement ps = conn.prepareStatement(sql)) {
			ps.setInt(1, id);
			int linhasAfetadas = ps.executeUpdate();
			if (linhasAfetadas > 0) {
				return true;
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return false;

	}
    
    public List<Cliente> getAllNome(String desc) {
		
		ResultSet rs = null;
		java.util.List<Cliente> allFuncionario = new ArrayList<>();
		try (
                        Connection conn = FabricaConexao.getConexao(); 
                        PreparedStatement ps = conn.prepareStatement("SELECT * FROM cliente WHERE nome LIKE ?");
                       ){ 
                        ps.setString(1,"%" + desc + "%");
			rs = ps.executeQuery();
                        
			while (rs.next()) {
                            
			    Cliente p = new Cliente();
                            
                            p.setId_cliente(rs.getInt("id_cliente"));
                            p.setNome(rs.getString("nome"));
                            p.setEndereco(rs.getString("endereco") );
                            p.setTelefone(rs.getString("telefone"));
                            p.setEmail(rs.getString("email"));
                            p.setSenha(rs.getString("senha"));
                        
                            
                            allFuncionario.add(p);
                            
			}
		} catch (SQLException e) {
			e.printStackTrace();
		} finally {
			FabricaConexao.fecharConexao(rs);
		}
		return allFuncionario;
	}
    
}
